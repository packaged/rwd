<?php
namespace Fortifi\Rwd\Currency\Currencies;

use Fortifi\Rwd\Currency\AbstractCurrency;

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
}
