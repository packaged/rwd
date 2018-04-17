<?php
namespace Packaged\Rwd\Currency\Currencies;

use Packaged\Rwd\Currency\AbstractCurrency;

class CYPCurrency extends AbstractCurrency
{
  public function getSymbol()
  {
    return 'CYP';
  }

  public function getCode()
  {
    return 'CYP';
  }

  public function getNumericCode()
  {
    return '196';
  }

  public function getName()
  {
    return 'Cyprus Pound';
  }

  public function getMajorUnit()
  {
    return 'pound';
  }

  public function getMinorUnit()
  {
    return 'cent';
  }

  public function getUSDAverage()
  {
    return 0.4065;
  }

  public function getDecimalSeparator()
  {
    return ',';
  }

  public function getThousandSeparator()
  {
    return '.';
  }
}
