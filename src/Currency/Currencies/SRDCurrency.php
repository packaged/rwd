<?php
namespace Packaged\Rwd\Currency\Currencies;

use Packaged\Rwd\Currency\AbstractCurrency;

class SRDCurrency extends AbstractCurrency
{
  public function getDecimalCount()
  {
    return 2;
  }
  
  public function getSymbol()
  {
    return '$';
  }

  public function getCode()
  {
    return 'SRD';
  }

  public function getNumericCode()
  {
    return '968';
  }

  public function getName()
  {
    return 'Surinam Dollar';
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
    return 2.9991;
  }
}
