<?php
namespace Fortifi\Rwd\Currency\Currencies;

use Fortifi\Rwd\Currency\AbstractCurrency;

class KRWCurrency extends AbstractCurrency
{
  public function getSymbol()
  {
    return '₩';
  }

  public function getCode()
  {
    return 'KRW';
  }

  public function getNumericCode()
  {
    return 410;
  }

  public function getName()
  {
    return 'South Korea, Won';
  }

  public function getMajorUnit()
  {
    return 'won';
  }

  public function getMinorUnit()
  {
    return 'chon';
  }
}
