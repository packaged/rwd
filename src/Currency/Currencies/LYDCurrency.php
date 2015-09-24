<?php
namespace Fortifi\Rwd\Currency\Currencies;

use Fortifi\Rwd\Currency\AbstractCurrency;

class LYDCurrency extends AbstractCurrency
{
  public function getSymbol()
  {
    return 'LYD';
  }

  public function getCode()
  {
    return 'LYD';
  }

  public function getNumericCode()
  {
    return 434;
  }

  public function getName()
  {
    return 'Libyan Dinar';
  }

  public function getMajorUnit()
  {
    return 'dinar';
  }

  public function getMinorUnit()
  {
    return 'dirham';
  }
}
