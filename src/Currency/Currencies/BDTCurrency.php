<?php
namespace Packaged\Rwd\Currency\Currencies;

use Packaged\Rwd\Currency\AbstractCurrency;

class BDTCurrency extends AbstractCurrency
{
  public function getDecimalCount()
  {
    return 2;
  }
  
  public function getSymbol()
  {
    return 'BDT';
  }

  public function getCode()
  {
    return 'BDT';
  }

  public function getNumericCode()
  {
    return '050';
  }

  public function getName()
  {
    return 'Bangladesh, Taka';
  }

  public function getMajorUnit()
  {
    return 'taka';
  }

  public function getMinorUnit()
  {
    return 'paisa';
  }

  public function getUSDAverage()
  {
    return 73.3581;
  }
}
