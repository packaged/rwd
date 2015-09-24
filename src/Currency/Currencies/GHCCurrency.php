<?php
namespace Fortifi\Rwd\Currency\Currencies;

use Fortifi\Rwd\Currency\AbstractCurrency;

class GHCCurrency extends AbstractCurrency
{
  public function getSymbol()
  {
    return '¢';
  }

  public function getCode()
  {
    return 'GHC';
  }

  public function getNumericCode()
  {
    return 288;
  }

  public function getName()
  {
    return 'Ghana, Cedi';
  }

  public function getMajorUnit()
  {
    return 'new cedi';
  }

  public function getMinorUnit()
  {
    return 'psewa';
  }
}
