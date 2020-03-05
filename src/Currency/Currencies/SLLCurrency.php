<?php
namespace Packaged\Rwd\Currency\Currencies;

use Packaged\Rwd\Currency\AbstractCurrency;

class SLLCurrency extends AbstractCurrency
{
  public function getDecimalCount()
  {
    return 2;
  }
  
  public function getSymbol()
  {
    return 'SLL';
  }

  public function getCode()
  {
    return 'SLL';
  }

  public function getNumericCode()
  {
    return '694';
  }

  public function getName()
  {
    return 'Sierra Leone, Leone';
  }

  public function getMajorUnit()
  {
    return 'leone';
  }

  public function getMinorUnit()
  {
    return 'cent';
  }

  public function getUSDAverage()
  {
    return 3702.4836;
  }
}
