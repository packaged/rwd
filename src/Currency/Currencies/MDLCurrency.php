<?php
namespace Packaged\Rwd\Currency\Currencies;

use Packaged\Rwd\Currency\AbstractCurrency;

class MDLCurrency extends AbstractCurrency
{
  public function getDecimalCount()
  {
    return 2;
  }
  
  public function getSymbol()
  {
    return 'MDL';
  }

  public function getCode()
  {
    return 'MDL';
  }

  public function getNumericCode()
  {
    return '498';
  }

  public function getName()
  {
    return 'Moldovan Leu';
  }

  public function getMajorUnit()
  {
    return 'leu, pl., lei';
  }

  public function getMinorUnit()
  {
    return ' ';
  }

  public function getUSDAverage()
  {
    return 12.7922;
  }
}
