<?php
namespace Packaged\Rwd\Currency\Currencies;

use Packaged\Rwd\Currency\AbstractCurrency;

class CNYCurrency extends AbstractCurrency
{
  public function getDecimalCount()
  {
    return 2;
  }
  
  public function getSymbol()
  {
    return '¥';
  }

  public function getCode()
  {
    return 'CNY';
  }

  public function getNumericCode()
  {
    return '156';
  }

  public function getName()
  {
    return 'China Yuan Renminbi';
  }

  public function getMajorUnit()
  {
    return 'yuan renminbi';
  }

  public function getMinorUnit()
  {
    return 'jiao';
  }

  public function getUSDAverage()
  {
    return 6.7426;
  }
}
