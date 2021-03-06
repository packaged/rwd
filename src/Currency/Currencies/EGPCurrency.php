<?php
namespace Packaged\Rwd\Currency\Currencies;

use Packaged\Rwd\Currency\AbstractCurrency;

class EGPCurrency extends AbstractCurrency
{
  public function getDecimalCount()
  {
    return 2;
  }
  
  public function getSymbol()
  {
    return '£';
  }

  public function getCode()
  {
    return 'EGP';
  }

  public function getNumericCode()
  {
    return '818';
  }

  public function getName()
  {
    return 'Egyptian Pound';
  }

  public function getMajorUnit()
  {
    return 'pound';
  }

  public function getMinorUnit()
  {
    return 'piaster';
  }

  public function getUSDAverage()
  {
    return 6.1635;
  }
}
