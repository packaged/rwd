<?php
namespace Packaged\Rwd\Currency\Currencies;

use Packaged\Rwd\Currency\AbstractCurrency;

class KPWCurrency extends AbstractCurrency
{
  public function getDecimalCount()
  {
    return 2;
  }
  
  public function getSymbol()
  {
    return '₩';
  }

  public function getCode()
  {
    return 'KPW';
  }

  public function getNumericCode()
  {
    return '408';
  }

  public function getName()
  {
    return 'North Korean Won';
  }

  public function getMajorUnit()
  {
    return 'won';
  }

  public function getMinorUnit()
  {
    return 'chon';
  }

  public function getUSDAverage()
  {
    return 137.0575;
  }
}
