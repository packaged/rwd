<?php
namespace Packaged\Rwd\Currency\Currencies;

use Packaged\Rwd\Currency\AbstractCurrency;

class AZNCurrency extends AbstractCurrency
{
  public function getSymbol()
  {
    return 'ман';
  }

  public function getCode()
  {
    return 'AZN';
  }

  public function getNumericCode()
  {
    return '944';
  }

  public function getName()
  {
    return 'Azerbaijanian Manat';
  }

  public function getMajorUnit()
  {
    return 'manat';
  }

  public function getMinorUnit()
  {
    return 'qäpik';
  }

  public function getUSDAverage()
  {
    return 0.8385;
  }
}
