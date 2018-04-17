<?php
namespace Packaged\Rwd\Currency\Currencies;

use Packaged\Rwd\Currency\AbstractCurrency;

class NLGCurrency extends AbstractCurrency
{
  public function getSymbol()
  {
    return 'NLG';
  }

  public function getCode()
  {
    return 'NLG';
  }

  public function getNumericCode()
  {
    return '978';
  }

  public function getName()
  {
    return 'Euro';
  }

  public function getMajorUnit()
  {
    return 'euro';
  }

  public function getMinorUnit()
  {
    return 'cent';
  }

  public function getUSDAverage()
  {
    return 1.6716;
  }
}
