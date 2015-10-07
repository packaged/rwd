<?php
namespace Packaged\Rwd\Currency\Currencies;

use Packaged\Rwd\Currency\AbstractCurrency;

class TMMCurrency extends AbstractCurrency
{
  public function getSymbol()
  {
    return 'TMM';
  }

  public function getCode()
  {
    return 'TMM';
  }

  public function getNumericCode()
  {
    return 795;
  }

  public function getName()
  {
    return 'Turkmenistan Manat';
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
    return 11613.167;
  }
}
