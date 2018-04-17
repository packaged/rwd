<?php
namespace Packaged\Rwd\Currency\Currencies;

use Packaged\Rwd\Currency\AbstractCurrency;

class JMDCurrency extends AbstractCurrency
{
  public function getSymbol()
  {
    return 'J$';
  }

  public function getCode()
  {
    return 'JMD';
  }

  public function getNumericCode()
  {
    return '388';
  }

  public function getName()
  {
    return 'Jamaican Dollar';
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
    return 88.0404;
  }
}
