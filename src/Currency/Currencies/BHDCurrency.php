<?php
namespace Fortifi\Rwd\Currency\Currencies;

use Fortifi\Rwd\Currency\AbstractCurrency;

class BHDCurrency extends AbstractCurrency
{
  public function getSymbol()
  {
    return 'BHD';
  }

  public function getCode()
  {
    return 'BHD';
  }

  public function getNumericCode()
  {
    return 48;
  }

  public function getName()
  {
    return 'Bahraini Dinar';
  }

  public function getMajorUnit()
  {
    return 'dinar';
  }

  public function getMinorUnit()
  {
    return 'fils';
  }
}
