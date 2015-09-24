<?php
namespace Fortifi\Rwd\Currency\Currencies;

use Fortifi\Rwd\Currency\AbstractCurrency;

class STDCurrency extends AbstractCurrency
{
  public function getSymbol()
  {
    return 'STD';
  }

  public function getCode()
  {
    return 'STD';
  }

  public function getNumericCode()
  {
    return 678;
  }

  public function getName()
  {
    return 'Sao Tome and Principe, Dobra';
  }

  public function getMajorUnit()
  {
    return 'dobra';
  }

  public function getMinorUnit()
  {
    return 'centimo';
  }
}
