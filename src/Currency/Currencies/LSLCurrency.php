<?php
namespace Fortifi\Rwd\Currency\Currencies;

use Fortifi\Rwd\Currency\AbstractCurrency;

class LSLCurrency extends AbstractCurrency
{
  public function getSymbol()
  {
    return 'LSL';
  }

  public function getCode()
  {
    return 'LSL';
  }

  public function getNumericCode()
  {
    return 426;
  }

  public function getName()
  {
    return 'Lesotho, Loti';
  }

  public function getMajorUnit()
  {
    return 'loti, pl., maloti';
  }

  public function getMinorUnit()
  {
    return 'lisente';
  }
}
