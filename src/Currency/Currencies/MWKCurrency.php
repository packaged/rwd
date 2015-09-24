<?php
namespace Fortifi\Rwd\Currency\Currencies;

use Fortifi\Rwd\Currency\AbstractCurrency;

class MWKCurrency extends AbstractCurrency
{
  public function getSymbol()
  {
    return 'MWK';
  }

  public function getCode()
  {
    return 'MWK';
  }

  public function getNumericCode()
  {
    return 454;
  }

  public function getName()
  {
    return 'Malawi, Kwacha';
  }

  public function getMajorUnit()
  {
    return 'kwacha';
  }

  public function getMinorUnit()
  {
    return 'tambala';
  }
}
