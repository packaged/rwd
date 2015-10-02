<?php
namespace Packaged\Rwd\Currency\Currencies;

use Packaged\Rwd\Currency\AbstractCurrency;

class ZMKCurrency extends AbstractCurrency
{
  public function getSymbol()
  {
    return 'ZMK';
  }

  public function getCode()
  {
    return 'ZMK';
  }

  public function getNumericCode()
  {
    return 894;
  }

  public function getName()
  {
    return 'Zambia Kwacha';
  }

  public function getMajorUnit()
  {
    return 'kwacha';
  }

  public function getMinorUnit()
  {
    return 'ngwee';
  }
}
