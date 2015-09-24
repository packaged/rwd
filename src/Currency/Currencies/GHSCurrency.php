<?php
namespace Fortifi\Rwd\Currency\Currencies;

use Fortifi\Rwd\Currency\AbstractCurrency;

class GHSCurrency extends AbstractCurrency
{
  public function getSymbol()
  {
    return 'GHS';
  }

  public function getCode()
  {
    return 'GHS';
  }

  public function getNumericCode()
  {
    return 936;
  }

  public function getName()
  {
    return 'Ghana Cedi';
  }

  public function getMajorUnit()
  {
    return 'cedi';
  }

  public function getMinorUnit()
  {
    return ' ';
  }
}
