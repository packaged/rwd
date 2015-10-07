<?php
namespace Packaged\Rwd\Currency\Currencies;

use Packaged\Rwd\Currency\AbstractCurrency;

class STDCurrency extends AbstractCurrency
{
  public function getSymbol()
  {
    return 'STD';
  }

  public function getCode()
  {
    return 'STD';
  }

  public function getNumericCode()
  {
    return 678;
  }

  public function getName()
  {
    return 'Sao Tome and Principe, Dobra';
  }

  public function getMajorUnit()
  {
    return 'dobra';
  }

  public function getMinorUnit()
  {
    return 'centimo';
  }

  public function getUSDAverage()
  {
    return 16254.3512;
  }
}
