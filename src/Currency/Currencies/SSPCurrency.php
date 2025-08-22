<?php
namespace Packaged\Rwd\Currency\Currencies;

use Packaged\Rwd\Currency\AbstractCurrency;

class SSPCurrency extends AbstractCurrency
{
  public function getDecimalCount()
  {
    return 2;
  }
  
  public function getSymbol()
  {
    return 'SS£';
  }

  public function getCode()
  {
    return 'SSP';
  }

  public function getNumericCode()
  {
    return '728';
  }

  public function getName()
  {
    return 'South Sudanese Pound';
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
    return 0.000221;
  }
}
