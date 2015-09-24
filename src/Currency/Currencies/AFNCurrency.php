<?php
namespace Fortifi\Rwd\Currency\Currencies;

use Fortifi\Rwd\Currency\AbstractCurrency;

class AFNCurrency extends AbstractCurrency
{
  public function getSymbol()
  {
    return '؋';
  }

  public function getCode()
  {
    return 'AFN';
  }

  public function getNumericCode()
  {
    return 971;
  }

  public function getName()
  {
    return 'Afghanistan, Afghani';
  }

  public function getMajorUnit()
  {
    return 'afghani';
  }

  public function getMinorUnit()
  {
    return 'pul';
  }
}
