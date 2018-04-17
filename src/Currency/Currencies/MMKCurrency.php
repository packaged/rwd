<?php
namespace Packaged\Rwd\Currency\Currencies;

use Packaged\Rwd\Currency\AbstractCurrency;

class MMKCurrency extends AbstractCurrency
{
  public function getSymbol()
  {
    return 'MMK';
  }

  public function getCode()
  {
    return 'MMK';
  }

  public function getNumericCode()
  {
    return '104';
  }

  public function getName()
  {
    return 'Myanmar, Kyat';
  }

  public function getMajorUnit()
  {
    return 'kyat';
  }

  public function getMinorUnit()
  {
    return 'pya';
  }

  public function getUSDAverage()
  {
    return 371.5185;
  }
}
