<?php
$template = '<?php
namespace Packaged\Rwd\Currency\Currencies;

use Packaged\Rwd\Currency\AbstractCurrency;

class {{alpha}}Currency extends AbstractCurrency
{
  public function getSymbol()
  {
    return \'{{symbol}}\';
  }

  public function getCode()
  {
    return \'{{alpha}}\';
  }

  public function getNumericCode()
  {
    return {{numeric}};
  }

  public function getName()
  {
    return \'{{name}}\';
  }

  public function getMajorUnit()
  {
    return \'{{major}}\';
  }

  public function getMinorUnit()
  {
    return \'{{minor}}\';
  }

  public function getUSDAverage()
  {
    return {{fixed}};
  }{{methods}}
}
';

$decimalMethod = '

  public function getDecimalSeparator()
  {
    return \'{{sep}}\';
  }';
$thousandMethod = '

  public function getThousandSeparator()
  {
    return \'{{sep}}\';
  }';

$json = json_decode(file_get_contents('currency.json'));
$names = $json->Names;
$symbols = [];

$historical = json_decode(file_get_contents('historical.json'));

if(($handle = fopen("symbols.csv", "r")) !== false)
{
  while(($data = fgetcsv($handle, 1000, ",")) !== false)
  {
    $symbols[$data[0]] = $data[1];
  }
}

if(($handle = fopen("Untitled.csv", "r")) !== false)
{
  while(($data = fgetcsv($handle, 1000, ",")) !== false)
  {
    list($name, $alpha, $numeric, $major, $minor, $decimal, $display) = $data;

    if(isset($symbols[$alpha]))
    {
      $symbol = $symbols[$alpha];
    }
    else
    {
      $jsonData = isset($names->$alpha) ? $names->$alpha : [];
      $symbol = isset($jsonData[0]) ? $jsonData[0] : '';
    }

    if($numeric < 1)
    {
      continue;
    }

    $methods = '';

    if(!empty($display) && strlen($display) > 2)
    {
      if($decimal > 0)
      {
        $sep = substr($display, 0 - $decimal - 1, 1);
        if($sep !== '.')
        {
          $methods .= str_replace('{{sep}}', addslashes($sep), $decimalMethod);
        }
      }

      $sep = substr($display, 1, 1);
      if($sep !== ',')
      {
        $methods .= str_replace('{{sep}}', addslashes($sep), $thousandMethod);
      }
    }

    $fixed = 1;
    if(isset($historical->$alpha))
    {
      $rates = [];
      foreach($historical->$alpha as $year => $yearData)
      {
        $year = ltrim($year, '*');
        if($year > 2005) // Use 10 Year Average
        {
          $rates[] = $yearData->bid;
          $rates[] = $yearData->ask;
        }
      }
      $fixed = round(array_sum($rates) / count($rates), 4);
    }

    $file = str_replace(
      [
        '{{name}}',
        '{{alpha}}',
        '{{numeric}}',
        '{{major}}',
        '{{minor}}',
        '{{decimal}}',
        '{{symbol}}',
        '{{methods}}',
        '{{fixed}}',
      ],
      [
        $name,
        $alpha,
        $numeric,
        addslashes($major),
        addslashes($minor),
        $decimal,
        $symbol,
        $methods,
        $fixed,
      ],
      $template
    );

    file_put_contents('../' . $alpha . 'Currency.php', $file);
  }
  fclose($handle);
}
