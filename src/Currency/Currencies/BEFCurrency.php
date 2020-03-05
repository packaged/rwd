<?php
namespace Packaged\Rwd\Currency\Currencies;

use Packaged\Rwd\Currency\AbstractCurrency;

class BEFCurrency extends AbstractCurrency
{
  public function getDecimalCount()
  {
    return 2;
  }
  
  public function getSymbol()
  {
    return 'BEF';
  }

  public function getCode()
  {
    return 'BEF';
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
    return 30.5999;
  }
}
