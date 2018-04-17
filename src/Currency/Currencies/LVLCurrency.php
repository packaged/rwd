<?php
namespace Packaged\Rwd\Currency\Currencies;

use Packaged\Rwd\Currency\AbstractCurrency;

class LVLCurrency extends AbstractCurrency
{
  public function getSymbol()
  {
    return 'Ls';
  }

  public function getCode()
  {
    return 'LVL';
  }

  public function getNumericCode()
  {
    return '428';
  }

  public function getName()
  {
    return 'Latvian Lats';
  }

  public function getMajorUnit()
  {
    return 'lat';
  }

  public function getMinorUnit()
  {
    return 'santim';
  }

  public function getUSDAverage()
  {
    return 0.5327;
  }
}
