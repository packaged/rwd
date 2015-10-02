<?php
namespace Packaged\Rwd\Currency\Currencies;

use Packaged\Rwd\Currency\AbstractCurrency;

class UYUCurrency extends AbstractCurrency
{
  public function getSymbol()
  {
    return '$U';
  }

  public function getCode()
  {
    return 'UYU';
  }

  public function getNumericCode()
  {
    return 858;
  }

  public function getName()
  {
    return 'Peso Uruguayo';
  }

  public function getMajorUnit()
  {
    return 'peso uruguayo';
  }

  public function getMinorUnit()
  {
    return 'centé';
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
