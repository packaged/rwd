<?php
namespace Packaged\Rwd\Currency\Currencies;

use Packaged\Rwd\Currency\AbstractCurrency;

class MURCurrency extends AbstractCurrency
{
  public function getDecimalCount()
  {
    return 2;
  }
  
  public function getSymbol()
  {
    return '₨';
  }

  public function getCode()
  {
    return 'MUR';
  }

  public function getNumericCode()
  {
    return '480';
  }

  public function getName()
  {
    return 'Mauritius Rupee';
  }

  public function getMajorUnit()
  {
    return 'rupee';
  }

  public function getMinorUnit()
  {
    return 'cent';
  }

  public function getUSDAverage()
  {
    return 30.9028;
  }

  public function getDecimalSeparator()
  {
    return '#';
  }
}
