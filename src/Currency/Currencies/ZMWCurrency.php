<?php
namespace Fortifi\Rwd\Currency\Currencies;

use Fortifi\Rwd\Currency\AbstractCurrency;

class ZMWCurrency extends AbstractCurrency
{
  public function getSymbol()
  {
    return 'ZMW';
  }

  public function getCode()
  {
    return 'ZMW';
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
