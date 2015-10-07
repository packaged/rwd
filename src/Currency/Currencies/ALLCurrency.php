<?php
namespace Packaged\Rwd\Currency\Currencies;

use Packaged\Rwd\Currency\AbstractCurrency;

class ALLCurrency extends AbstractCurrency
{
  public function getSymbol()
  {
    return 'Lek';
  }

  public function getCode()
  {
    return 'ALL';
  }

  public function getNumericCode()
  {
    return 8;
  }

  public function getName()
  {
    return 'Albania, Lek';
  }

  public function getMajorUnit()
  {
    return 'lek';
  }

  public function getMinorUnit()
  {
    return 'qindarka';
  }

  public function getUSDAverage()
  {
    return 101.7134;
  }
}
