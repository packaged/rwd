<?php
namespace Packaged\Rwd\Currency\Currencies;

use Packaged\Rwd\Currency\AbstractCurrency;

class SZLCurrency extends AbstractCurrency
{
  public function getDecimalCount()
  {
    return 2;
  }
  
  public function getSymbol()
  {
    return 'SZL';
  }

  public function getCode()
  {
    return 'SZL';
  }

  public function getNumericCode()
  {
    return '748';
  }

  public function getName()
  {
    return 'Swaziland, Lilangeni';
  }

  public function getMajorUnit()
  {
    return 'emalangeni';
  }

  public function getMinorUnit()
  {
    return 'cent';
  }

  public function getUSDAverage()
  {
    return 8.6072;
  }
}
