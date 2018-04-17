<?php
namespace Packaged\Rwd\Currency\Currencies;

use Packaged\Rwd\Currency\AbstractCurrency;

class NGNCurrency extends AbstractCurrency
{
  public function getSymbol()
  {
    return '₦';
  }

  public function getCode()
  {
    return 'NGN';
  }

  public function getNumericCode()
  {
    return '566';
  }

  public function getName()
  {
    return 'Nigeria, Naira';
  }

  public function getMajorUnit()
  {
    return 'naira';
  }

  public function getMinorUnit()
  {
    return 'kobo';
  }

  public function getUSDAverage()
  {
    return 150.974;
  }
}
