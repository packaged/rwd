<?php
namespace Fortifi\Rwd\Currency\Currencies;

use Fortifi\Rwd\Currency\AbstractCurrency;

class GRDCurrency extends AbstractCurrency
{
  public function getSymbol()
  {
    return 'GRD';
  }

  public function getCode()
  {
    return 'GRD';
  }

  public function getNumericCode()
  {
    return 978;
  }

  public function getName()
  {
    return 'Euro';
  }

  public function getMajorUnit()
  {
    return 'euro';
  }

  public function getMinorUnit()
  {
    return 'cent';
  }
}
