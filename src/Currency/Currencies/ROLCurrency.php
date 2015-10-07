<?php
namespace Packaged\Rwd\Currency\Currencies;

use Packaged\Rwd\Currency\AbstractCurrency;

class ROLCurrency extends AbstractCurrency
{
  public function getSymbol()
  {
    return 'ROL';
  }

  public function getCode()
  {
    return 'ROL';
  }

  public function getNumericCode()
  {
    return 642;
  }

  public function getName()
  {
    return 'Romania, Old Leu';
  }

  public function getMajorUnit()
  {
    return 'leu (pl. lei)';
  }

  public function getMinorUnit()
  {
    return 'bani';
  }

  public function getUSDAverage()
  {
    return 31167.537;
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
