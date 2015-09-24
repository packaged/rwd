<?php
namespace Fortifi\Rwd\Currency\Currencies;

use Fortifi\Rwd\Currency\AbstractCurrency;

class CVECurrency extends AbstractCurrency
{
  public function getSymbol()
  {
    return 'CVE';
  }

  public function getCode()
  {
    return 'CVE';
  }

  public function getNumericCode()
  {
    return 132;
  }

  public function getName()
  {
    return 'Cape Verde Escudo';
  }

  public function getMajorUnit()
  {
    return 'escudo';
  }

  public function getMinorUnit()
  {
    return 'centavo';
  }
}
