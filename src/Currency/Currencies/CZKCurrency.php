<?php
namespace Packaged\Rwd\Currency\Currencies;

use Packaged\Rwd\Currency\AbstractCurrency;

class CZKCurrency extends AbstractCurrency
{
  public function getDecimalCount()
  {
    return 2;
  }
  
  public function getSymbol()
  {
    return 'Kč';
  }

  public function getCode()
  {
    return 'CZK';
  }

  public function getNumericCode()
  {
    return '203';
  }

  public function getName()
  {
    return 'Czech Koruna';
  }

  public function getMajorUnit()
  {
    return 'koruna';
  }

  public function getMinorUnit()
  {
    return 'haler';
  }

  public function getUSDAverage()
  {
    return 20.0167;
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
