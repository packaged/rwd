<?php
namespace Packaged\Rwd\Currency\Currencies;

use Packaged\Rwd\Currency\AbstractCurrency;

class AUDCurrency extends AbstractCurrency
{
  public function getDecimalCount()
  {
    return 2;
  }
  
  public function getSymbol()
  {
    return '$';
  }

  public function getCode()
  {
    return 'AUD';
  }

  public function getNumericCode()
  {
    return '036';
  }

  public function getName()
  {
    return 'Australian Dollar';
  }

  public function getMajorUnit()
  {
    return 'dollar';
  }

  public function getMinorUnit()
  {
    return 'cent';
  }

  public function getUSDAverage()
  {
    return 1.1486;
  }

  public function getThousandSeparator()
  {
    return ' ';
  }
}
