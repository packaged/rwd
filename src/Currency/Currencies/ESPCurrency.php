<?php
namespace Fortifi\Rwd\Currency\Currencies;

use Fortifi\Rwd\Currency\AbstractCurrency;

class ESPCurrency extends AbstractCurrency
{
  public function getSymbol()
  {
    return 'ESP';
  }

  public function getCode()
  {
    return 'ESP';
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
