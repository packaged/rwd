<?php
namespace Packaged\Rwd\Currency\Currencies;

use Packaged\Rwd\Currency\AbstractCurrency;

class LUFCurrency extends AbstractCurrency
{
  public function getSymbol()
  {
    return 'LUF';
  }

  public function getCode()
  {
    return 'LUF';
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
