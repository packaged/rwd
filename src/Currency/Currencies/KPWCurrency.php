<?php
namespace Fortifi\Rwd\Currency\Currencies;

use Fortifi\Rwd\Currency\AbstractCurrency;

class KPWCurrency extends AbstractCurrency
{
  public function getSymbol()
  {
    return '₩';
  }

  public function getCode()
  {
    return 'KPW';
  }

  public function getNumericCode()
  {
    return 408;
  }

  public function getName()
  {
    return 'North Korean Won';
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
