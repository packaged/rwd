<?php
namespace Packaged\Rwd\Currency\Currencies;

use Packaged\Rwd\Currency\AbstractCurrency;

class CLFCurrency extends AbstractCurrency
{
  public function getDecimalCount()
  {
    return 2;
  }
  
  public function getSymbol()
  {
    return 'CLF';
  }

  public function getCode()
  {
    return 'CLF';
  }

  public function getNumericCode()
  {
    return '990';
  }

  public function getName()
  {
    return 'Unidad de Fomento';
  }

  public function getMajorUnit()
  {
    return 'UF';
  }

  public function getMinorUnit()
  {
    return ' ';
  }

  public function getUSDAverage()
  {
    return 1;
  }
}
