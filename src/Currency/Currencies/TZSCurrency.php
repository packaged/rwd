<?php
namespace Fortifi\Rwd\Currency\Currencies;

use Fortifi\Rwd\Currency\AbstractCurrency;

class TZSCurrency extends AbstractCurrency
{
  public function getSymbol()
  {
    return 'TZS';
  }

  public function getCode()
  {
    return 'TZS';
  }

  public function getNumericCode()
  {
    return 834;
  }

  public function getName()
  {
    return 'Tanzanian Shilling';
  }

  public function getMajorUnit()
  {
    return 'shilling';
  }

  public function getMinorUnit()
  {
    return 'cent';
  }
}
