<?php
namespace Packaged\Rwd\Currency\Currencies;

use Packaged\Rwd\Currency\AbstractCurrency;

class AOACurrency extends AbstractCurrency
{
  public function getSymbol()
  {
    return 'AOA';
  }

  public function getCode()
  {
    return 'AOA';
  }

  public function getNumericCode()
  {
    return '973';
  }

  public function getName()
  {
    return 'Angola, Kwanza';
  }

  public function getMajorUnit()
  {
    return 'kwanza';
  }

  public function getMinorUnit()
  {
    return 'lwei';
  }

  public function getUSDAverage()
  {
    return 90.7871;
  }
}
