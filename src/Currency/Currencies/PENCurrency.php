<?php
namespace Packaged\Rwd\Currency\Currencies;

use Packaged\Rwd\Currency\AbstractCurrency;

class PENCurrency extends AbstractCurrency
{
  public function getSymbol()
  {
    return 'S/.';
  }

  public function getCode()
  {
    return 'PEN';
  }

  public function getNumericCode()
  {
    return 604;
  }

  public function getName()
  {
    return 'Peru, Nuevo Sol';
  }

  public function getMajorUnit()
  {
    return 'new sol';
  }

  public function getMinorUnit()
  {
    return 'centimo';
  }

  public function getUSDAverage()
  {
    return 2.9232;
  }
}
