<?php
namespace Fortifi\Rwd\Currency\Currencies;

use Fortifi\Rwd\Currency\AbstractCurrency;

class ERNCurrency extends AbstractCurrency
{
  public function getSymbol()
  {
    return 'ERN';
  }

  public function getCode()
  {
    return 'ERN';
  }

  public function getNumericCode()
  {
    return 232;
  }

  public function getName()
  {
    return 'Eritrea, Nakfa';
  }

  public function getMajorUnit()
  {
    return 'nakfa';
  }

  public function getMinorUnit()
  {
    return 'cent';
  }
}
