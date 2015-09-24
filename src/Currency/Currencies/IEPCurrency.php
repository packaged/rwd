<?php
namespace Fortifi\Rwd\Currency\Currencies;

use Fortifi\Rwd\Currency\AbstractCurrency;

class IEPCurrency extends AbstractCurrency
{
  public function getSymbol()
  {
    return 'IEP';
  }

  public function getCode()
  {
    return 'IEP';
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
