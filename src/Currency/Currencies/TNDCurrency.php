<?php
namespace Packaged\Rwd\Currency\Currencies;

use Packaged\Rwd\Currency\AbstractCurrency;

class TNDCurrency extends AbstractCurrency
{
  public function getSymbol()
  {
    return 'TND';
  }

  public function getCode()
  {
    return 'TND';
  }

  public function getNumericCode()
  {
    return 788;
  }

  public function getName()
  {
    return 'Tunisian Dinar';
  }

  public function getMajorUnit()
  {
    return 'dinar';
  }

  public function getMinorUnit()
  {
    return 'millime';
  }
}
