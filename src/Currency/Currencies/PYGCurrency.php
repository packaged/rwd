<?php
namespace Fortifi\Rwd\Currency\Currencies;

use Fortifi\Rwd\Currency\AbstractCurrency;

class PYGCurrency extends AbstractCurrency
{
  public function getSymbol()
  {
    return 'Gs';
  }

  public function getCode()
  {
    return 'PYG';
  }

  public function getNumericCode()
  {
    return 600;
  }

  public function getName()
  {
    return 'Paraguay, Guarani';
  }

  public function getMajorUnit()
  {
    return 'guarani';
  }

  public function getMinorUnit()
  {
    return 'centimo';
  }
}
