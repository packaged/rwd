<?php
namespace Packaged\Rwd\Currency\Currencies;

use Packaged\Rwd\Currency\AbstractCurrency;

class HRKCurrency extends AbstractCurrency
{
  public function getSymbol()
  {
    return 'kn';
  }

  public function getCode()
  {
    return 'HRK';
  }

  public function getNumericCode()
  {
    return 191;
  }

  public function getName()
  {
    return 'Croatian Kuna';
  }

  public function getMajorUnit()
  {
    return 'kuna';
  }

  public function getMinorUnit()
  {
    return 'lipa';
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
