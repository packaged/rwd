<?php
namespace Packaged\Rwd\Currency\Currencies;

use Packaged\Rwd\Currency\AbstractCurrency;

class UGXCurrency extends AbstractCurrency
{
  public function getDecimalCount()
  {
    return 2;
  }
  
  public function getSymbol()
  {
    return 'UGX';
  }

  public function getCode()
  {
    return 'UGX';
  }

  public function getNumericCode()
  {
    return '800';
  }

  public function getName()
  {
    return 'Uganda Shilling';
  }

  public function getMajorUnit()
  {
    return 'shilling';
  }

  public function getMinorUnit()
  {
    return 'cent';
  }

  public function getUSDAverage()
  {
    return 2284.9225;
  }
}
