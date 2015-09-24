<?php
namespace Fortifi\Rwd\Currency\Currencies;

use Fortifi\Rwd\Currency\AbstractCurrency;

class LKRCurrency extends AbstractCurrency
{
  public function getSymbol()
  {
    return '₨';
  }

  public function getCode()
  {
    return 'LKR';
  }

  public function getNumericCode()
  {
    return 144;
  }

  public function getName()
  {
    return 'Sri Lanka Rupee';
  }

  public function getMajorUnit()
  {
    return 'rupee';
  }

  public function getMinorUnit()
  {
    return 'cent';
  }
}
