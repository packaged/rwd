<?php
namespace Fortifi\Rwd\Currency\Currencies;

use Fortifi\Rwd\Currency\AbstractCurrency;

class AZNCurrency extends AbstractCurrency
{
  public function getSymbol()
  {
    return 'ман';
  }

  public function getCode()
  {
    return 'AZN';
  }

  public function getNumericCode()
  {
    return 944;
  }

  public function getName()
  {
    return 'Azerbaijanian Manat';
  }

  public function getMajorUnit()
  {
    return 'manat';
  }

  public function getMinorUnit()
  {
    return 'qäpik';
  }
}
