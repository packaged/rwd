<?php
namespace Packaged\Rwd\Currency\Currencies;

use Packaged\Rwd\Currency\AbstractCurrency;

class MNTCurrency extends AbstractCurrency
{
  public function getDecimalCount()
  {
    return 2;
  }
  
  public function getSymbol()
  {
    return '₮';
  }

  public function getCode()
  {
    return 'MNT';
  }

  public function getNumericCode()
  {
    return '496';
  }

  public function getName()
  {
    return 'Mongolia, Tugrik';
  }

  public function getMajorUnit()
  {
    return 'tugrik';
  }

  public function getMinorUnit()
  {
    return 'mongo';
  }

  public function getUSDAverage()
  {
    return 1414.3628;
  }
}
