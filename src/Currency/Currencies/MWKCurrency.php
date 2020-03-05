<?php
namespace Packaged\Rwd\Currency\Currencies;

use Packaged\Rwd\Currency\AbstractCurrency;

class MWKCurrency extends AbstractCurrency
{
  public function getDecimalCount()
  {
    return 2;
  }
  
  public function getSymbol()
  {
    return 'MWK';
  }

  public function getCode()
  {
    return 'MWK';
  }

  public function getNumericCode()
  {
    return '454';
  }

  public function getName()
  {
    return 'Malawi, Kwacha';
  }

  public function getMajorUnit()
  {
    return 'kwacha';
  }

  public function getMinorUnit()
  {
    return 'tambala';
  }

  public function getUSDAverage()
  {
    return 236.1009;
  }
}
