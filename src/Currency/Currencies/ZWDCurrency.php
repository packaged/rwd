<?php
namespace Fortifi\Rwd\Currency\Currencies;

use Fortifi\Rwd\Currency\AbstractCurrency;

class ZWDCurrency extends AbstractCurrency
{
  public function getSymbol()
  {
    return 'Z$';
  }

  public function getCode()
  {
    return 'ZWD';
  }

  public function getNumericCode()
  {
    return 716;
  }

  public function getName()
  {
    return 'Zimbabwe Dollar';
  }

  public function getMajorUnit()
  {
    return 'dollar';
  }

  public function getMinorUnit()
  {
    return 'cent';
  }

  public function getThousandSeparator()
  {
    return ' ';
  }
}
