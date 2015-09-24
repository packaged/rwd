<?php
namespace Fortifi\Rwd\Currency\Currencies;

use Fortifi\Rwd\Currency\AbstractCurrency;

class PLNCurrency extends AbstractCurrency
{
  public function getSymbol()
  {
    return 'zł';
  }

  public function getCode()
  {
    return 'PLN';
  }

  public function getNumericCode()
  {
    return 985;
  }

  public function getName()
  {
    return 'Poland, Zloty';
  }

  public function getMajorUnit()
  {
    return 'zloty';
  }

  public function getMinorUnit()
  {
    return 'grosz';
  }

  public function getDecimalSeparator()
  {
    return ',';
  }

  public function getThousandSeparator()
  {
    return ' ';
  }
}
