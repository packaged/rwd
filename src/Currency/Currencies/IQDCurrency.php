<?php
namespace Packaged\Rwd\Currency\Currencies;

use Packaged\Rwd\Currency\AbstractCurrency;

class IQDCurrency extends AbstractCurrency
{
  public function getDecimalCount()
  {
    return 3;
  }
  
  public function getSymbol()
  {
    return 'IQD';
  }

  public function getCode()
  {
    return 'IQD';
  }

  public function getNumericCode()
  {
    return '368';
  }

  public function getName()
  {
    return 'Iraqi Dinar';
  }

  public function getMajorUnit()
  {
    return 'dinar';
  }

  public function getMinorUnit()
  {
    return 'fil';
  }

  public function getUSDAverage()
  {
    return 1207.4342;
  }
}
