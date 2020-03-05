<?php
namespace Packaged\Rwd\Currency\Currencies;

use Packaged\Rwd\Currency\AbstractCurrency;

class JPYCurrency extends AbstractCurrency
{
  public function getDecimalCount()
  {
    return 0;
  }
  
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
    return '392';
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

  public function getUSDAverage()
  {
    return 100.2823;
  }
}
