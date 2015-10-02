<?php
namespace Packaged\Rwd\Currency\Currencies;

use Packaged\Rwd\Currency\AbstractCurrency;

class MURCurrency extends AbstractCurrency
{
  public function getSymbol()
  {
    return '₨';
  }

  public function getCode()
  {
    return 'MUR';
  }

  public function getNumericCode()
  {
    return 480;
  }

  public function getName()
  {
    return 'Mauritius Rupee';
  }

  public function getMajorUnit()
  {
    return 'rupee';
  }

  public function getMinorUnit()
  {
    return 'cent';
  }

  public function getDecimalSeparator()
  {
    return '#';
  }
}
