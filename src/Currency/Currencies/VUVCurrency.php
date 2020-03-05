<?php
namespace Packaged\Rwd\Currency\Currencies;

use Packaged\Rwd\Currency\AbstractCurrency;

class VUVCurrency extends AbstractCurrency
{
  public function getDecimalCount()
  {
    return 0;
  }
  
  public function getSymbol()
  {
    return 'VUV';
  }

  public function getCode()
  {
    return 'VUV';
  }

  public function getNumericCode()
  {
    return '548';
  }

  public function getName()
  {
    return 'Vanuatu, Vatu';
  }

  public function getMajorUnit()
  {
    return 'vatu';
  }

  public function getMinorUnit()
  {
    return 'centime';
  }

  public function getUSDAverage()
  {
    return 99.3777;
  }
}
