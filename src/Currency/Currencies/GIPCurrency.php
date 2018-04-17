<?php
namespace Packaged\Rwd\Currency\Currencies;

use Packaged\Rwd\Currency\AbstractCurrency;

class GIPCurrency extends AbstractCurrency
{
  public function getSymbol()
  {
    return '£';
  }

  public function getCode()
  {
    return 'GIP';
  }

  public function getNumericCode()
  {
    return '292';
  }

  public function getName()
  {
    return 'Gibraltar Pound';
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
    return 0.6047;
  }
}
