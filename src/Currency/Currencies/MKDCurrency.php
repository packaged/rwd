<?php
namespace Fortifi\Rwd\Currency\Currencies;

use Fortifi\Rwd\Currency\AbstractCurrency;

class MKDCurrency extends AbstractCurrency
{
  public function getSymbol()
  {
    return 'ден';
  }

  public function getCode()
  {
    return 'MKD';
  }

  public function getNumericCode()
  {
    return 807;
  }

  public function getName()
  {
    return 'Macedonia, Denar';
  }

  public function getMajorUnit()
  {
    return 'denar';
  }

  public function getMinorUnit()
  {
    return 'deni';
  }
}
