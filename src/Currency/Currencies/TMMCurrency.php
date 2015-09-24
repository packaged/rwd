<?php
namespace Fortifi\Rwd\Currency\Currencies;

use Fortifi\Rwd\Currency\AbstractCurrency;

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
}
