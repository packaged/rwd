<?php
namespace Packaged\Rwd\Currency\Currencies;

use Packaged\Rwd\Currency\AbstractCurrency;

class YERCurrency extends AbstractCurrency
{
  public function getDecimalCount()
  {
    return 2;
  }
  
  public function getSymbol()
  {
    return '﷼';
  }

  public function getCode()
  {
    return 'YER';
  }

  public function getNumericCode()
  {
    return '886';
  }

  public function getName()
  {
    return 'Yemeni Rial';
  }

  public function getMajorUnit()
  {
    return 'rial';
  }

  public function getMinorUnit()
  {
    return 'fil';
  }

  public function getUSDAverage()
  {
    return 206.4372;
  }
}
