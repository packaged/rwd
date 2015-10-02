<?php
namespace Packaged\Rwd\Currency\Currencies;

use Packaged\Rwd\Currency\AbstractCurrency;

class MVRCurrency extends AbstractCurrency
{
  public function getSymbol()
  {
    return 'MVR';
  }

  public function getCode()
  {
    return 'MVR';
  }

  public function getNumericCode()
  {
    return 462;
  }

  public function getName()
  {
    return 'Maldives, Rufiyaa';
  }

  public function getMajorUnit()
  {
    return 'rufiyaa';
  }

  public function getMinorUnit()
  {
    return 'lari';
  }
}
