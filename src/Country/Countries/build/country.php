<?php
$template = '<?php
namespace Packaged\Rwd\Country\Countries;

use Packaged\Rwd\Country\CountryInterface;

class {{iso2}}Country implements CountryInterface
{
  public function getName()
  {
    return \'{{name}}\';
  }

  public function getIso2()
  {
    return \'{{iso2}}\';
  }

  public function getIso3()
  {
    return \'{{iso3}}\';
  }

  public function getWmo()
  {
    return \'{{wmo}}\';
  }

  public function getNumericCode()
  {
    return {{code}};
  }

  public function getDialPrefix()
  {
    return {{dial}};
  }

  public function getCurrencyCode()
  {
    return \'{{currency}}\';
  }

  public function isInEurope()
  {
    return \'{{currency}}\';
  }
}
';

//TODO: Use the additional information available in restcountries
$countries = json_decode(file_get_contents('https://restcountries.eu/rest/v2/all'));
$iso2 = 'ISO3166-1-Alpha-2';
$iso3 = 'ISO3166-1-Alpha-3';
$isoCode = 'ISO3166-1-numeric';

$dialingCodes = [];

foreach($countries as $country)
{

  $file = str_replace(
    [
      '{{name}}',
      '{{iso2}}',
      '{{iso3}}',
      '{{wmo}}',
      '{{code}}',
      '{{dial}}',
      '{{currency}}',
    ],
    [
      addslashes($country->name),
      $country->$iso2,
      $country->$iso3,
      $country->WMO,
      (int)$country->$isoCode,
      (int)$country->Dial,
      $country->currency_alphabetic_code,
    ],
    $template
  );

  if(!isset($dialingCodes[(int)$country->Dial]))
  {
    $dialingCodes[(int)$country->Dial] = [];
  }
  $dialingCodes[(int)$country->Dial][$country->WMO] = $country->$iso2;
  ksort($dialingCodes[(int)$country->Dial]);

  file_put_contents('../' . $country->$iso2 . 'Country.php', $file);
}

krsort($dialingCodes);

$codes = [];
foreach($dialingCodes as $dialCode => $countryCode)
{
  $codes[] = str_pad($dialCode, 3) . " => '" . implode(',', $countryCode) . "'";
}

$file = '<?php
namespace Packaged\Rwd\Country;

class DialingCodes
{
  const LOOKUP = [
    ' . implode(",\n    ", $codes) . ',
  ];
  
  /**
   * @param $dialingCode
   *
   * @return array
   */
  public static function getCountries($dialingCode)
  {
    if(isset(self::LOOKUP[$dialingCode]))
    {
      return explode(\',\', self::LOOKUP[$dialingCode]);
    }
    return null;
  }
}
';

file_put_contents('../../DialingCodes.php', $file);
