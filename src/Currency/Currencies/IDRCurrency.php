<?php
namespace Fortifi\Rwd\Currency\Currencies;

use Fortifi\Rwd\Currency\AbstractCurrency;

class IDRCurrency extends AbstractCurrency
{
  public function getSymbol()
  {
    return 'Rp';
  }

  public function getCode()
  {
    return 'IDR';
  }

  public function getNumericCode()
  {
    return 360;
  }

  public function getName()
  {
    return 'Indonesia, Rupiah';
  }

  public function getMajorUnit()
  {
    return 'rupiah';
  }

  public function getMinorUnit()
  {
    return 'sen';
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
