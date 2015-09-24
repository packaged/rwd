<?php
namespace Fortifi\Rwd\Currency\Currencies;

use Fortifi\Rwd\Currency\AbstractCurrency;

class ETBCurrency extends AbstractCurrency
{
  public function getSymbol()
  {
    return 'ETB';
  }

  public function getCode()
  {
    return 'ETB';
  }

  public function getNumericCode()
  {
    return 230;
  }

  public function getName()
  {
    return 'Ethiopian Birr';
  }

  public function getMajorUnit()
  {
    return 'birr';
  }

  public function getMinorUnit()
  {
    return 'cent';
  }
}
