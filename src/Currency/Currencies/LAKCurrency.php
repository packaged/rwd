<?php
namespace Fortifi\Rwd\Currency\Currencies;

use Fortifi\Rwd\Currency\AbstractCurrency;

class LAKCurrency extends AbstractCurrency
{
  public function getSymbol()
  {
    return '₭';
  }

  public function getCode()
  {
    return 'LAK';
  }

  public function getNumericCode()
  {
    return 418;
  }

  public function getName()
  {
    return 'Laos, Kip';
  }

  public function getMajorUnit()
  {
    return 'new kip';
  }

  public function getMinorUnit()
  {
    return 'at';
  }
}
