<?php
namespace Fortifi\Rwd\Currency\Currencies;

use Fortifi\Rwd\Currency\AbstractCurrency;

class CDFCurrency extends AbstractCurrency
{
  public function getSymbol()
  {
    return 'CDF';
  }

  public function getCode()
  {
    return 'CDF';
  }

  public function getNumericCode()
  {
    return 976;
  }

  public function getName()
  {
    return 'Franc Congolais';
  }

  public function getMajorUnit()
  {
    return 'franc';
  }

  public function getMinorUnit()
  {
    return 'centime';
  }
}
