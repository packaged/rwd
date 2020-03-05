<?php
namespace Packaged\Rwd\Currency\Currencies;

use Packaged\Rwd\Currency\AbstractCurrency;

class INRCurrency extends AbstractCurrency
{
  public function getDecimalCount()
  {
    return 2;
  }
  
  public function getSymbol()
  {
    return '';
  }

  public function getCode()
  {
    return 'INR';
  }

  public function getNumericCode()
  {
    return '356';
  }

  public function getName()
  {
    return 'Indian Rupee';
  }

  public function getMajorUnit()
  {
    return 'rupee';
  }

  public function getMinorUnit()
  {
    return 'paise';
  }

  public function getUSDAverage()
  {
    return 50.8483;
  }
}
