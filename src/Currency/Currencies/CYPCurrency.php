<?php
namespace Fortifi\Rwd\Currency\Currencies;

use Fortifi\Rwd\Currency\AbstractCurrency;

class CYPCurrency extends AbstractCurrency
{
  public function getSymbol()
  {
    return 'CYP';
  }

  public function getCode()
  {
    return 'CYP';
  }

  public function getNumericCode()
  {
    return 196;
  }

  public function getName()
  {
    return 'Cyprus Pound';
  }

  public function getMajorUnit()
  {
    return 'pound';
  }

  public function getMinorUnit()
  {
    return 'cent';
  }

  public function getDecimalSeparator()
  {
    return ',';
  }

  public function getThousandSeparator()
  {
    return '.';
  }
}
