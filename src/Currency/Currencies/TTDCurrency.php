<?php
namespace Packaged\Rwd\Currency\Currencies;

use Packaged\Rwd\Currency\AbstractCurrency;

class TTDCurrency extends AbstractCurrency
{
  public function getDecimalCount()
  {
    return 2;
  }
  
  public function getSymbol()
  {
    return 'TT$';
  }

  public function getCode()
  {
    return 'TTD';
  }

  public function getNumericCode()
  {
    return '780';
  }

  public function getName()
  {
    return 'Trinidad and Tobago Dollar';
  }

  public function getMajorUnit()
  {
    return 'dollar';
  }

  public function getMinorUnit()
  {
    return 'cent';
  }

  public function getUSDAverage()
  {
    return 6.315;
  }
}
