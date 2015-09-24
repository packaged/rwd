<?php
namespace Fortifi\Rwd\Currency\Currencies;

use Fortifi\Rwd\Currency\AbstractCurrency;

class KMFCurrency extends AbstractCurrency
{
  public function getSymbol()
  {
    return 'KMF';
  }

  public function getCode()
  {
    return 'KMF';
  }

  public function getNumericCode()
  {
    return 174;
  }

  public function getName()
  {
    return 'Comoro Franc';
  }

  public function getMajorUnit()
  {
    return 'franc';
  }

  public function getMinorUnit()
  {
    return ' ';
  }
}
