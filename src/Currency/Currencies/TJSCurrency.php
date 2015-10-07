<?php
namespace Packaged\Rwd\Currency\Currencies;

use Packaged\Rwd\Currency\AbstractCurrency;

class TJSCurrency extends AbstractCurrency
{
  public function getSymbol()
  {
    return 'TJS';
  }

  public function getCode()
  {
    return 'TJS';
  }

  public function getNumericCode()
  {
    return 972;
  }

  public function getName()
  {
    return 'Tajikistan, Somoni';
  }

  public function getMajorUnit()
  {
    return 'somoni';
  }

  public function getMinorUnit()
  {
    return ' ';
  }

  public function getUSDAverage()
  {
    return 3.6984;
  }
}
