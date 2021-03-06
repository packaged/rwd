<?php
namespace Packaged\Rwd\Currency\Currencies;

use Packaged\Rwd\Currency\AbstractCurrency;

class RONCurrency extends AbstractCurrency
{
  public function getDecimalCount()
  {
    return 2;
  }
  
  public function getSymbol()
  {
    return 'lei';
  }

  public function getCode()
  {
    return 'RON';
  }

  public function getNumericCode()
  {
    return '946';
  }

  public function getName()
  {
    return 'Romania, New Leu';
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
    return 3.1168;
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
