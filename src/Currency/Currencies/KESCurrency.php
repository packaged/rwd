<?php
namespace Fortifi\Rwd\Currency\Currencies;

use Fortifi\Rwd\Currency\AbstractCurrency;

class KESCurrency extends AbstractCurrency
{
  public function getSymbol()
  {
    return 'KES';
  }

  public function getCode()
  {
    return 'KES';
  }

  public function getNumericCode()
  {
    return 404;
  }

  public function getName()
  {
    return 'Kenyan Shilling';
  }

  public function getMajorUnit()
  {
    return 'shilling';
  }

  public function getMinorUnit()
  {
    return 'cent';
  }
}
