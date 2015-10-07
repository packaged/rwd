<?php
namespace Packaged\Rwd\Currency\Currencies;

use Packaged\Rwd\Currency\AbstractCurrency;

class THBCurrency extends AbstractCurrency
{
  public function getSymbol()
  {
    return '฿';
  }

  public function getCode()
  {
    return 'THB';
  }

  public function getNumericCode()
  {
    return 764;
  }

  public function getName()
  {
    return 'Thailand, Baht';
  }

  public function getMajorUnit()
  {
    return 'baht';
  }

  public function getMinorUnit()
  {
    return 'satang';
  }

  public function getUSDAverage()
  {
    return 32.7776;
  }
}
