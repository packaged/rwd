<?php
namespace Packaged\Rwd\Currency\Currencies;

use Packaged\Rwd\Currency\AbstractCurrency;

class MZMCurrency extends AbstractCurrency
{
  public function getSymbol()
  {
    return 'MZM';
  }

  public function getCode()
  {
    return 'MZM';
  }

  public function getNumericCode()
  {
    return '508';
  }

  public function getName()
  {
    return 'Mozambique Metical';
  }

  public function getMajorUnit()
  {
    return 'metical';
  }

  public function getMinorUnit()
  {
    return 'centavo';
  }

  public function getUSDAverage()
  {
    return 29027.7594;
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
