<?php
namespace Packaged\Rwd\Currency\Currencies;

use Packaged\Rwd\Currency\AbstractCurrency;

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
    return '716';
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

  public function getUSDAverage()
  {
    return 266019414.73;
  }

  public function getThousandSeparator()
  {
    return ' ';
  }
}
