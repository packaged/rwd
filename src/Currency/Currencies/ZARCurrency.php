<?php
namespace Packaged\Rwd\Currency\Currencies;

use Packaged\Rwd\Currency\AbstractCurrency;

class ZARCurrency extends AbstractCurrency
{
  public function getSymbol()
  {
    return 'R';
  }

  public function getCode()
  {
    return 'ZAR';
  }

  public function getNumericCode()
  {
    return 710;
  }

  public function getName()
  {
    return 'South Africa, Rand';
  }

  public function getMajorUnit()
  {
    return 'rand';
  }

  public function getMinorUnit()
  {
    return 'cent';
  }

  public function getUSDAverage()
  {
    return 8.6075;
  }

  public function getThousandSeparator()
  {
    return ' ';
  }
}
