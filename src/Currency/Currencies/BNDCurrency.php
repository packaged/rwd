<?php
namespace Fortifi\Rwd\Currency\Currencies;

use Fortifi\Rwd\Currency\AbstractCurrency;

class BNDCurrency extends AbstractCurrency
{
  public function getSymbol()
  {
    return '$';
  }

  public function getCode()
  {
    return 'BND';
  }

  public function getNumericCode()
  {
    return 96;
  }

  public function getName()
  {
    return 'Brunei Dollar';
  }

  public function getMajorUnit()
  {
    return 'ringgit';
  }

  public function getMinorUnit()
  {
    return 'sen';
  }
}
