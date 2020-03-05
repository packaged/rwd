<?php
namespace Packaged\Rwd\Currency\Currencies;

use Packaged\Rwd\Currency\AbstractCurrency;

class RSDCurrency extends AbstractCurrency
{
  public function getDecimalCount()
  {
    return 2;
  }
  
  public function getSymbol()
  {
    return 'Дин.';
  }

  public function getCode()
  {
    return 'RSD';
  }

  public function getNumericCode()
  {
    return '941';
  }

  public function getName()
  {
    return 'Serbian Dinar';
  }

  public function getMajorUnit()
  {
    return 'dinar';
  }

  public function getMinorUnit()
  {
    return ' ';
  }

  public function getUSDAverage()
  {
    return 76.9787;
  }
}
