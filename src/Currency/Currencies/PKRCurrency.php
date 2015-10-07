<?php
namespace Packaged\Rwd\Currency\Currencies;

use Packaged\Rwd\Currency\AbstractCurrency;

class PKRCurrency extends AbstractCurrency
{
  public function getSymbol()
  {
    return '₨';
  }

  public function getCode()
  {
    return 'PKR';
  }

  public function getNumericCode()
  {
    return 586;
  }

  public function getName()
  {
    return 'Pakistan Rupee';
  }

  public function getMajorUnit()
  {
    return 'rupee';
  }

  public function getMinorUnit()
  {
    return 'paisa';
  }

  public function getUSDAverage()
  {
    return 84.236;
  }
}
