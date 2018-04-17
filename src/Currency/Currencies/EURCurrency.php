<?php
namespace Packaged\Rwd\Currency\Currencies;

use Packaged\Rwd\Currency\AbstractCurrency;

class EURCurrency extends AbstractCurrency
{
  public function getSymbol()
  {
    return '€';
  }

  public function getCode()
  {
    return 'EUR';
  }

  public function getNumericCode()
  {
    return '978';
  }

  public function getName()
  {
    return 'Euro';
  }

  public function getMajorUnit()
  {
    return 'euro';
  }

  public function getMinorUnit()
  {
    return 'cent';
  }

  public function getUSDAverage()
  {
    return 0.7586;
  }
}
