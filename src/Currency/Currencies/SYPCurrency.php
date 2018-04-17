<?php
namespace Packaged\Rwd\Currency\Currencies;

use Packaged\Rwd\Currency\AbstractCurrency;

class SYPCurrency extends AbstractCurrency
{
  public function getSymbol()
  {
    return '£';
  }

  public function getCode()
  {
    return 'SYP';
  }

  public function getNumericCode()
  {
    return '760';
  }

  public function getName()
  {
    return 'Syrian Pound';
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
    return 82.4777;
  }
}
