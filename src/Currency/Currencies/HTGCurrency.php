<?php
namespace Fortifi\Rwd\Currency\Currencies;

use Fortifi\Rwd\Currency\AbstractCurrency;

class HTGCurrency extends AbstractCurrency
{
  public function getSymbol()
  {
    return 'HTG';
  }

  public function getCode()
  {
    return 'HTG';
  }

  public function getNumericCode()
  {
    return 332;
  }

  public function getName()
  {
    return 'Haiti, Gourde';
  }

  public function getMajorUnit()
  {
    return 'gourde';
  }

  public function getMinorUnit()
  {
    return 'centime';
  }
}
