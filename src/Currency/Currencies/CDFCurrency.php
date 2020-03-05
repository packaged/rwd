<?php
namespace Packaged\Rwd\Currency\Currencies;

use Packaged\Rwd\Currency\AbstractCurrency;

class CDFCurrency extends AbstractCurrency
{
  public function getDecimalCount()
  {
    return 2;
  }
  
  public function getSymbol()
  {
    return 'CDF';
  }

  public function getCode()
  {
    return 'CDF';
  }

  public function getNumericCode()
  {
    return '976';
  }

  public function getName()
  {
    return 'Franc Congolais';
  }

  public function getMajorUnit()
  {
    return 'franc';
  }

  public function getMinorUnit()
  {
    return 'centime';
  }

  public function getUSDAverage()
  {
    return 763.8919;
  }
}
