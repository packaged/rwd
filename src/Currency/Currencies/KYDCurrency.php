<?php
namespace Packaged\Rwd\Currency\Currencies;

use Packaged\Rwd\Currency\AbstractCurrency;

class KYDCurrency extends AbstractCurrency
{
  public function getSymbol()
  {
    return '$';
  }

  public function getCode()
  {
    return 'KYD';
  }

  public function getNumericCode()
  {
    return '136';
  }

  public function getName()
  {
    return 'Cayman Islands Dollar';
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
    return 0.8249;
  }
}
