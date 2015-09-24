<?php
namespace Fortifi\Rwd\Currency\Currencies;

use Fortifi\Rwd\Currency\AbstractCurrency;

class RSDCurrency extends AbstractCurrency
{
  public function getSymbol()
  {
    return 'Дин.';
  }

  public function getCode()
  {
    return 'RSD';
  }

  public function getNumericCode()
  {
    return 941;
  }

  public function getName()
  {
    return 'Serbian Dinar';
  }

  public function getMajorUnit()
  {
    return 'dinar';
  }

  public function getMinorUnit()
  {
    return ' ';
  }
}
