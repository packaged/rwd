<?php
namespace Fortifi\Rwd\Currency\Currencies;

use Fortifi\Rwd\Currency\AbstractCurrency;

class TWDCurrency extends AbstractCurrency
{
  public function getSymbol()
  {
    return 'NT$';
  }

  public function getCode()
  {
    return 'TWD';
  }

  public function getNumericCode()
  {
    return 901;
  }

  public function getName()
  {
    return 'New Taiwan Dollar';
  }

  public function getMajorUnit()
  {
    return 'new dollar';
  }

  public function getMinorUnit()
  {
    return ' ';
  }
}
