<?php
namespace Packaged\Rwd\Currency\Currencies;

use Packaged\Rwd\Currency\AbstractCurrency;

class BNDCurrency extends AbstractCurrency
{
  public function getSymbol()
  {
    return '$';
  }

  public function getCode()
  {
    return 'BND';
  }

  public function getNumericCode()
  {
    return '096';
  }

  public function getName()
  {
    return 'Brunei Dollar';
  }

  public function getMajorUnit()
  {
    return 'ringgit';
  }

  public function getMinorUnit()
  {
    return 'sen';
  }

  public function getUSDAverage()
  {
    return 1.3716;
  }
}
