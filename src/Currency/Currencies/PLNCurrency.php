<?php
namespace Packaged\Rwd\Currency\Currencies;

use Packaged\Rwd\Currency\AbstractCurrency;

class PLNCurrency extends AbstractCurrency
{
  public function getSymbol()
  {
    return 'zł';
  }

  public function getCode()
  {
    return 'PLN';
  }

  public function getNumericCode()
  {
    return 985;
  }

  public function getName()
  {
    return 'Poland, Zloty';
  }

  public function getMajorUnit()
  {
    return 'zloty';
  }

  public function getMinorUnit()
  {
    return 'grosz';
  }

  public function getUSDAverage()
  {
    return 3.0672;
  }

  public function getDecimalSeparator()
  {
    return ',';
  }

  public function getThousandSeparator()
  {
    return ' ';
  }
}
