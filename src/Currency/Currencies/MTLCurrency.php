<?php
namespace Packaged\Rwd\Currency\Currencies;

use Packaged\Rwd\Currency\AbstractCurrency;

class MTLCurrency extends AbstractCurrency
{
  public function getDecimalCount()
  {
    return 2;
  }
  
  public function getSymbol()
  {
    return 'MTL';
  }

  public function getCode()
  {
    return 'MTL';
  }

  public function getNumericCode()
  {
    return '470';
  }

  public function getName()
  {
    return 'Maltese Lira';
  }

  public function getMajorUnit()
  {
    return 'lira, pl., liri';
  }

  public function getMinorUnit()
  {
    return 'cent';
  }

  public function getUSDAverage()
  {
    return 0.2989;
  }
}
