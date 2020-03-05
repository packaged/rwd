<?php
namespace Packaged\Rwd\Currency\Currencies;

use Packaged\Rwd\Currency\AbstractCurrency;

class ITLCurrency extends AbstractCurrency
{
  public function getDecimalCount()
  {
    return 2;
  }
  
  public function getSymbol()
  {
    return 'ITL';
  }

  public function getCode()
  {
    return 'ITL';
  }

  public function getNumericCode()
  {
    return '978';
  }

  public function getName()
  {
    return 'Euro';
  }

  public function getMajorUnit()
  {
    return 'euro';
  }

  public function getMinorUnit()
  {
    return 'cent';
  }

  public function getUSDAverage()
  {
    return 1468.7616;
  }
}
