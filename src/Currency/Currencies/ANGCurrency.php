<?php
namespace Packaged\Rwd\Currency\Currencies;

use Packaged\Rwd\Currency\AbstractCurrency;

class ANGCurrency extends AbstractCurrency
{
  public function getSymbol()
  {
    return 'ƒ';
  }

  public function getCode()
  {
    return 'ANG';
  }

  public function getNumericCode()
  {
    return '532';
  }

  public function getName()
  {
    return 'Netherlands Antillian Guilder';
  }

  public function getMajorUnit()
  {
    return 'guilder';
  }

  public function getMinorUnit()
  {
    return 'cent';
  }

  public function getUSDAverage()
  {
    return 1.7922;
  }

  public function getDecimalSeparator()
  {
    return ',';
  }

  public function getThousandSeparator()
  {
    return '.';
  }
}
