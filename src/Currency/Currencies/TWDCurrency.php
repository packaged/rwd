<?php
namespace Packaged\Rwd\Currency\Currencies;

use Packaged\Rwd\Currency\AbstractCurrency;

class TWDCurrency extends AbstractCurrency
{
  public function getDecimalCount()
  {
    return 2;
  }
  
  public function getSymbol()
  {
    return 'NT$';
  }

  public function getCode()
  {
    return 'TWD';
  }

  public function getNumericCode()
  {
    return '901';
  }

  public function getName()
  {
    return 'New Taiwan Dollar';
  }

  public function getMajorUnit()
  {
    return 'new dollar';
  }

  public function getMinorUnit()
  {
    return ' ';
  }

  public function getUSDAverage()
  {
    return 31.2013;
  }
}
