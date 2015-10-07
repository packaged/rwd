<?php
namespace Packaged\Rwd\Currency\Currencies;

use Packaged\Rwd\Currency\AbstractCurrency;

class PGKCurrency extends AbstractCurrency
{
  public function getSymbol()
  {
    return 'PGK';
  }

  public function getCode()
  {
    return 'PGK';
  }

  public function getNumericCode()
  {
    return 598;
  }

  public function getName()
  {
    return 'Papua New Guinea, Kina';
  }

  public function getMajorUnit()
  {
    return 'kina';
  }

  public function getMinorUnit()
  {
    return 'toea';
  }

  public function getUSDAverage()
  {
    return 2.579;
  }
}
