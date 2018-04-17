<?php
namespace Packaged\Rwd\Currency\Currencies;

use Packaged\Rwd\Currency\AbstractCurrency;

class BBDCurrency extends AbstractCurrency
{
  public function getSymbol()
  {
    return '$';
  }

  public function getCode()
  {
    return 'BBD';
  }

  public function getNumericCode()
  {
    return '052';
  }

  public function getName()
  {
    return 'Barbados Dollar';
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
    return 2;
  }
}
