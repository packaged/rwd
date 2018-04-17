<?php
namespace Packaged\Rwd\Currency\Currencies;

use Packaged\Rwd\Currency\AbstractCurrency;

class AEDCurrency extends AbstractCurrency
{
  public function getSymbol()
  {
    return 'AED';
  }

  public function getCode()
  {
    return 'AED';
  }

  public function getNumericCode()
  {
    return '784';
  }

  public function getName()
  {
    return 'UAE Dirham';
  }

  public function getMajorUnit()
  {
    return 'dirham';
  }

  public function getMinorUnit()
  {
    return 'fil';
  }

  public function getUSDAverage()
  {
    return 3.6729;
  }
}
