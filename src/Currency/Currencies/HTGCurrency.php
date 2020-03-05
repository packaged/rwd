<?php
namespace Packaged\Rwd\Currency\Currencies;

use Packaged\Rwd\Currency\AbstractCurrency;

class HTGCurrency extends AbstractCurrency
{
  public function getDecimalCount()
  {
    return 2;
  }
  
  public function getSymbol()
  {
    return 'HTG';
  }

  public function getCode()
  {
    return 'HTG';
  }

  public function getNumericCode()
  {
    return '332';
  }

  public function getName()
  {
    return 'Haiti, Gourde';
  }

  public function getMajorUnit()
  {
    return 'gourde';
  }

  public function getMinorUnit()
  {
    return 'centime';
  }

  public function getUSDAverage()
  {
    return 41.2424;
  }
}
