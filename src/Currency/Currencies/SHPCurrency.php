<?php
namespace Packaged\Rwd\Currency\Currencies;

use Packaged\Rwd\Currency\AbstractCurrency;

class SHPCurrency extends AbstractCurrency
{
  public function getSymbol()
  {
    return '£';
  }

  public function getCode()
  {
    return 'SHP';
  }

  public function getNumericCode()
  {
    return '654';
  }

  public function getName()
  {
    return 'Saint Helena Pound';
  }

  public function getMajorUnit()
  {
    return 'pound';
  }

  public function getMinorUnit()
  {
    return 'new pence';
  }

  public function getUSDAverage()
  {
    return 0.6059;
  }
}
