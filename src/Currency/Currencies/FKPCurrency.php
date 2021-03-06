<?php
namespace Packaged\Rwd\Currency\Currencies;

use Packaged\Rwd\Currency\AbstractCurrency;

class FKPCurrency extends AbstractCurrency
{
  public function getDecimalCount()
  {
    return 2;
  }
  
  public function getSymbol()
  {
    return '£';
  }

  public function getCode()
  {
    return 'FKP';
  }

  public function getNumericCode()
  {
    return '238';
  }

  public function getName()
  {
    return 'Falkland Islands Pound';
  }

  public function getMajorUnit()
  {
    return 'pound';
  }

  public function getMinorUnit()
  {
    return 'pence';
  }

  public function getUSDAverage()
  {
    return 0.6059;
  }
}
