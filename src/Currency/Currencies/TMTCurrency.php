<?php
namespace Packaged\Rwd\Currency\Currencies;

use Packaged\Rwd\Currency\AbstractCurrency;

class TMTCurrency extends AbstractCurrency
{
  public function getDecimalCount()
  {
    return 2;
  }
  
  public function getSymbol()
  {
    return 'TMT';
  }

  public function getCode()
  {
    return 'TMT';
  }

  public function getNumericCode()
  {
    return '934';
  }

  public function getName()
  {
    return 'Turkmenistani New Manat';
  }

  public function getMajorUnit()
  {
    return 'manat';
  }

  public function getMinorUnit()
  {
    return 'tenga';
  }

  public function getUSDAverage()
  {
    return 2.0111;
  }
}
