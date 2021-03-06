<?php
namespace Packaged\Rwd\Currency\Currencies;

use Packaged\Rwd\Currency\AbstractCurrency;

class NIOCurrency extends AbstractCurrency
{
  public function getDecimalCount()
  {
    return 2;
  }
  
  public function getSymbol()
  {
    return 'C$';
  }

  public function getCode()
  {
    return 'NIO';
  }

  public function getNumericCode()
  {
    return '558';
  }

  public function getName()
  {
    return 'Nicaragua, Cordoba Oro';
  }

  public function getMajorUnit()
  {
    return 'gold cordoba';
  }

  public function getMinorUnit()
  {
    return 'centavo';
  }

  public function getUSDAverage()
  {
    return 21.99;
  }
}
