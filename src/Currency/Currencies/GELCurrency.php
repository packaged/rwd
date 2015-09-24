<?php
namespace Fortifi\Rwd\Currency\Currencies;

use Fortifi\Rwd\Currency\AbstractCurrency;

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
}
