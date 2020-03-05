<?php
namespace Packaged\Rwd\Currency\Currencies;

use Packaged\Rwd\Currency\AbstractCurrency;

class OMRCurrency extends AbstractCurrency
{
  public function getDecimalCount()
  {
    return 3;
  }
  
  public function getSymbol()
  {
    return '﷼';
  }

  public function getCode()
  {
    return 'OMR';
  }

  public function getNumericCode()
  {
    return '512';
  }

  public function getName()
  {
    return 'Rial Omani';
  }

  public function getMajorUnit()
  {
    return 'rial';
  }

  public function getMinorUnit()
  {
    return 'baiza';
  }

  public function getUSDAverage()
  {
    return 0.385;
  }
}
