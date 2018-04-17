<?php
namespace Packaged\Rwd\Currency\Currencies;

use Packaged\Rwd\Currency\AbstractCurrency;

class MZNCurrency extends AbstractCurrency
{
  public function getSymbol()
  {
    return 'MT';
  }

  public function getCode()
  {
    return 'MZN';
  }

  public function getNumericCode()
  {
    return '943';
  }

  public function getName()
  {
    return 'Mozambique Metical';
  }

  public function getMajorUnit()
  {
    return 'metical';
  }

  public function getMinorUnit()
  {
    return ' ';
  }

  public function getUSDAverage()
  {
    return 29.0311;
  }
}
