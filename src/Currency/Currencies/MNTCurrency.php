<?php
namespace Fortifi\Rwd\Currency\Currencies;

use Fortifi\Rwd\Currency\AbstractCurrency;

class MNTCurrency extends AbstractCurrency
{
  public function getSymbol()
  {
    return '₮';
  }

  public function getCode()
  {
    return 'MNT';
  }

  public function getNumericCode()
  {
    return 496;
  }

  public function getName()
  {
    return 'Mongolia, Tugrik';
  }

  public function getMajorUnit()
  {
    return 'tugrik';
  }

  public function getMinorUnit()
  {
    return 'mongo';
  }
}
