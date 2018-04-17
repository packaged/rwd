<?php
namespace Packaged\Rwd\Currency\Currencies;

use Packaged\Rwd\Currency\AbstractCurrency;

class BRLCurrency extends AbstractCurrency
{
  public function getSymbol()
  {
    return 'R$';
  }

  public function getCode()
  {
    return 'BRL';
  }

  public function getNumericCode()
  {
    return '986';
  }

  public function getName()
  {
    return 'Brazilian Real';
  }

  public function getMajorUnit()
  {
    return 'real';
  }

  public function getMinorUnit()
  {
    return 'centavo';
  }

  public function getUSDAverage()
  {
    return 2.1033;
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
