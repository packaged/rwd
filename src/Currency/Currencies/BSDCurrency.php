<?php
namespace Packaged\Rwd\Currency\Currencies;

use Packaged\Rwd\Currency\AbstractCurrency;

class BSDCurrency extends AbstractCurrency
{
  public function getSymbol()
  {
    return '$';
  }

  public function getCode()
  {
    return 'BSD';
  }

  public function getNumericCode()
  {
    return '044';
  }

  public function getName()
  {
    return 'Bahamian Dollar';
  }

  public function getMajorUnit()
  {
    return 'dollar';
  }

  public function getMinorUnit()
  {
    return 'cent';
  }

  public function getUSDAverage()
  {
    return 1.0014;
  }
}
