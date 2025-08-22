<?php
namespace Packaged\Rwd\Currency\Currencies;

use Packaged\Rwd\Currency\AbstractCurrency;

class SDGCurrency extends AbstractCurrency
{
  public function getDecimalCount()
  {
    return 2;
  }
  
  public function getSymbol()
  {
    return 'LS';
  }

  public function getCode()
  {
    return 'SDG';
  }

  public function getNumericCode()
  {
    return '938';
  }

  public function getName()
  {
    return 'Sudanese Pound';
  }

  public function getMajorUnit()
  {
    return 'pound';
  }

  public function getMinorUnit()
  {
    return 'piastre';
  }

  public function getUSDAverage()
  {
    return 0.0017;
  }
}
