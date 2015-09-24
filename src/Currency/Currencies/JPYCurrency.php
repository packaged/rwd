<?php
namespace Fortifi\Rwd\Currency\Currencies;

use Fortifi\Rwd\Currency\AbstractCurrency;

class JPYCurrency extends AbstractCurrency
{
  public function getSymbol()
  {
    return '¥';
  }

  public function getCode()
  {
    return 'JPY';
  }

  public function getNumericCode()
  {
    return 392;
  }

  public function getName()
  {
    return 'Japan, Yen';
  }

  public function getMajorUnit()
  {
    return 'yen';
  }

  public function getMinorUnit()
  {
    return 'sen';
  }
}
