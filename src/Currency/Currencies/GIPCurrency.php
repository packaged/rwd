<?php
namespace Fortifi\Rwd\Currency\Currencies;

use Fortifi\Rwd\Currency\AbstractCurrency;

class GIPCurrency extends AbstractCurrency
{
  public function getSymbol()
  {
    return '£';
  }

  public function getCode()
  {
    return 'GIP';
  }

  public function getNumericCode()
  {
    return 292;
  }

  public function getName()
  {
    return 'Gibraltar Pound';
  }

  public function getMajorUnit()
  {
    return 'pound';
  }

  public function getMinorUnit()
  {
    return 'pence';
  }
}
