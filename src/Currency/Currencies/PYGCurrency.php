<?php
namespace Packaged\Rwd\Currency\Currencies;

use Packaged\Rwd\Currency\AbstractCurrency;

class PYGCurrency extends AbstractCurrency
{
  public function getDecimalCount()
  {
    return 0;
  }
  
  public function getSymbol()
  {
    return 'Gs';
  }

  public function getCode()
  {
    return 'PYG';
  }

  public function getNumericCode()
  {
    return '600';
  }

  public function getName()
  {
    return 'Paraguay, Guarani';
  }

  public function getMajorUnit()
  {
    return 'guarani';
  }

  public function getMinorUnit()
  {
    return 'centimo';
  }

  public function getUSDAverage()
  {
    return 4720.0836;
  }
}
