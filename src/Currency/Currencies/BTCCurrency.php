<?php
namespace Packaged\Rwd\Currency\Currencies;

use Packaged\Rwd\Currency\AbstractCurrency;

class BTCCurrency extends AbstractCurrency
{
  public function getSymbol()
  {
    return 'Ƀ';
  }

  public function getCode()
  {
    return 'BTC';
  }

  public function getNumericCode()
  {
    return 0; //ISO 4217 can't include BTC as the currency code is not linked to any country code.
  }

  public function getName()
  {
    return 'Bitcoin';
  }

  public function getMajorUnit()
  {
    return 'bitcoin';
  }

  public function getMinorUnit()
  {
    return 'satoshi';
  }

  public function getUSDAverage()
  {
    return 454.34;
  }
}
