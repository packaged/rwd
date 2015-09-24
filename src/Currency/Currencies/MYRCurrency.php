<?php
namespace Fortifi\Rwd\Currency\Currencies;

use Fortifi\Rwd\Currency\AbstractCurrency;

class MYRCurrency extends AbstractCurrency
{
  public function getSymbol()
  {
    return 'RM';
  }

  public function getCode()
  {
    return 'MYR';
  }

  public function getNumericCode()
  {
    return 458;
  }

  public function getName()
  {
    return 'Malaysian Ringgit';
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
