<?php
namespace Fortifi\Rwd\Currency\Currencies;

use Fortifi\Rwd\Currency\AbstractCurrency;

class EEKCurrency extends AbstractCurrency
{
  public function getSymbol()
  {
    return 'kr';
  }

  public function getCode()
  {
    return 'EEK';
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
