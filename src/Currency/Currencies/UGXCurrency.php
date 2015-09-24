<?php
namespace Fortifi\Rwd\Currency\Currencies;

use Fortifi\Rwd\Currency\AbstractCurrency;

class UGXCurrency extends AbstractCurrency
{
  public function getSymbol()
  {
    return 'UGX';
  }

  public function getCode()
  {
    return 'UGX';
  }

  public function getNumericCode()
  {
    return 800;
  }

  public function getName()
  {
    return 'Uganda Shilling';
  }

  public function getMajorUnit()
  {
    return 'shilling';
  }

  public function getMinorUnit()
  {
    return 'cent';
  }
}
