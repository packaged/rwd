<?php
namespace Packaged\Rwd\Currency\Currencies;

use Packaged\Rwd\Currency\AbstractCurrency;

class CSDCurrency extends AbstractCurrency
{
  public function getDecimalCount()
  {
    return 2;
  }
  
  public function getSymbol()
  {
    return 'CSD';
  }

  public function getCode()
  {
    return 'CSD';
  }

  public function getNumericCode()
  {
    return '891';
  }

  public function getName()
  {
    return 'Serbian Dinar';
  }

  public function getMajorUnit()
  {
    return 'dinar';
  }

  public function getMinorUnit()
  {
    return 'para';
  }

  public function getUSDAverage()
  {
    return 1;
  }
}
