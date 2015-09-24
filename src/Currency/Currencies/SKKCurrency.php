<?php
namespace Fortifi\Rwd\Currency\Currencies;

use Fortifi\Rwd\Currency\AbstractCurrency;

class SKKCurrency extends AbstractCurrency
{
  public function getSymbol()
  {
    return 'SKK';
  }

  public function getCode()
  {
    return 'SKK';
  }

  public function getNumericCode()
  {
    return 703;
  }

  public function getName()
  {
    return 'Slovak Koruna';
  }

  public function getMajorUnit()
  {
    return 'koruna';
  }

  public function getMinorUnit()
  {
    return 'haliere';
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
