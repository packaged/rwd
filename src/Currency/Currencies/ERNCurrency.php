<?php
namespace Packaged\Rwd\Currency\Currencies;

use Packaged\Rwd\Currency\AbstractCurrency;

class ERNCurrency extends AbstractCurrency
{
  public function getDecimalCount()
  {
    return 2;
  }
  
  public function getSymbol()
  {
    return 'ERN';
  }

  public function getCode()
  {
    return 'ERN';
  }

  public function getNumericCode()
  {
    return '232';
  }

  public function getName()
  {
    return 'Eritrea, Nakfa';
  }

  public function getMajorUnit()
  {
    return 'nakfa';
  }

  public function getMinorUnit()
  {
    return 'cent';
  }

  public function getUSDAverage()
  {
    return 1;
  }
}
