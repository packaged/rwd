<?php
namespace Packaged\Rwd\Currency\Currencies;

use Packaged\Rwd\Currency\AbstractCurrency;

class BIFCurrency extends AbstractCurrency
{
  public function getDecimalCount()
  {
    return 0;
  }
  
  public function getSymbol()
  {
    return 'BIF';
  }

  public function getCode()
  {
    return 'BIF';
  }

  public function getNumericCode()
  {
    return '108';
  }

  public function getName()
  {
    return 'Burundi Franc';
  }

  public function getMajorUnit()
  {
    return 'franc';
  }

  public function getMinorUnit()
  {
    return 'centime';
  }

  public function getUSDAverage()
  {
    return 1302.3249;
  }
}
