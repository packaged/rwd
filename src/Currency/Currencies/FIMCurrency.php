<?php
namespace Fortifi\Rwd\Currency\Currencies;

use Fortifi\Rwd\Currency\AbstractCurrency;

class FIMCurrency extends AbstractCurrency
{
  public function getSymbol()
  {
    return 'FIM';
  }

  public function getCode()
  {
    return 'FIM';
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
