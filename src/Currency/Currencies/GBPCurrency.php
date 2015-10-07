<?php
namespace Packaged\Rwd\Currency\Currencies;

use Packaged\Rwd\Currency\AbstractCurrency;

class GBPCurrency extends AbstractCurrency
{
  public function getSymbol()
  {
    return '£';
  }

  public function getCode()
  {
    return 'GBP';
  }

  public function getNumericCode()
  {
    return 826;
  }

  public function getName()
  {
    return 'Pound Sterling';
  }

  public function getMajorUnit()
  {
    return 'pound';
  }

  public function getMinorUnit()
  {
    return 'pence';
  }

  public function getUSDAverage()
  {
    return 0.6031;
  }
}
