<?php
namespace Packaged\Rwd\Currency\Currencies;

use Packaged\Rwd\Currency\AbstractCurrency;

class GMDCurrency extends AbstractCurrency
{
  public function getSymbol()
  {
    return 'GMD';
  }

  public function getCode()
  {
    return 'GMD';
  }

  public function getNumericCode()
  {
    return '270';
  }

  public function getName()
  {
    return 'Gambia, Dalasi';
  }

  public function getMajorUnit()
  {
    return 'dalasi';
  }

  public function getMinorUnit()
  {
    return 'butut';
  }

  public function getUSDAverage()
  {
    return 30.4805;
  }
}
