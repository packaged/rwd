<?php
namespace Fortifi\Rwd\Currency\Currencies;

use Fortifi\Rwd\Currency\AbstractCurrency;

class ILSCurrency extends AbstractCurrency
{
  public function getSymbol()
  {
    return '₪';
  }

  public function getCode()
  {
    return 'ILS';
  }

  public function getNumericCode()
  {
    return 376;
  }

  public function getName()
  {
    return 'New Israeli Shekel';
  }

  public function getMajorUnit()
  {
    return 'new shekel';
  }

  public function getMinorUnit()
  {
    return 'agorot';
  }
}
