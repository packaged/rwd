<?php
namespace Packaged\Rwd\Currency\Currencies;

use Packaged\Rwd\Currency\AbstractCurrency;

class DJFCurrency extends AbstractCurrency
{
  public function getSymbol()
  {
    return 'DJF';
  }

  public function getCode()
  {
    return 'DJF';
  }

  public function getNumericCode()
  {
    return '262';
  }

  public function getName()
  {
    return 'Djibouti Franc';
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
    return 176.8335;
  }
}
