<?php
namespace Packaged\Rwd\Currency\Currencies;

use Packaged\Rwd\Currency\AbstractCurrency;

class DZDCurrency extends AbstractCurrency
{
  public function getSymbol()
  {
    return 'DZD';
  }

  public function getCode()
  {
    return 'DZD';
  }

  public function getNumericCode()
  {
    return 12;
  }

  public function getName()
  {
    return 'Algerian Dinar';
  }

  public function getMajorUnit()
  {
    return 'dinar';
  }

  public function getMinorUnit()
  {
    return 'centime';
  }
}
