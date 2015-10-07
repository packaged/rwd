<?php
namespace Packaged\Rwd\Currency\Currencies;

use Packaged\Rwd\Currency\AbstractCurrency;

class GHSCurrency extends AbstractCurrency
{
  public function getSymbol()
  {
    return 'GHS';
  }

  public function getCode()
  {
    return 'GHS';
  }

  public function getNumericCode()
  {
    return 936;
  }

  public function getName()
  {
    return 'Ghana Cedi';
  }

  public function getMajorUnit()
  {
    return 'cedi';
  }

  public function getMinorUnit()
  {
    return ' ';
  }

  public function getUSDAverage()
  {
    return 1.7176;
  }
}
