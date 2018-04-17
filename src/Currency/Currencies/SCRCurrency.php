<?php
namespace Packaged\Rwd\Currency\Currencies;

use Packaged\Rwd\Currency\AbstractCurrency;

class SCRCurrency extends AbstractCurrency
{
  public function getSymbol()
  {
    return '₨';
  }

  public function getCode()
  {
    return 'SCR';
  }

  public function getNumericCode()
  {
    return '690';
  }

  public function getName()
  {
    return 'Seychelles Rupee';
  }

  public function getMajorUnit()
  {
    return 'rupee';
  }

  public function getMinorUnit()
  {
    return 'cent';
  }

  public function getUSDAverage()
  {
    return 11.1648;
  }
}
