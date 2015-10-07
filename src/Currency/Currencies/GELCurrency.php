<?php
namespace Packaged\Rwd\Currency\Currencies;

use Packaged\Rwd\Currency\AbstractCurrency;

class GELCurrency extends AbstractCurrency
{
  public function getSymbol()
  {
    return 'GEL';
  }

  public function getCode()
  {
    return 'GEL';
  }

  public function getNumericCode()
  {
    return 981;
  }

  public function getName()
  {
    return 'Georgia, Lari';
  }

  public function getMajorUnit()
  {
    return 'lari';
  }

  public function getMinorUnit()
  {
    return 'tetri';
  }

  public function getUSDAverage()
  {
    return 1.7824;
  }
}
