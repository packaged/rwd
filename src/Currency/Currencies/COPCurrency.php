<?php
namespace Fortifi\Rwd\Currency\Currencies;

use Fortifi\Rwd\Currency\AbstractCurrency;

class COPCurrency extends AbstractCurrency
{
  public function getSymbol()
  {
    return '$';
  }

  public function getCode()
  {
    return 'COP';
  }

  public function getNumericCode()
  {
    return 170;
  }

  public function getName()
  {
    return 'Colombian Peso';
  }

  public function getMajorUnit()
  {
    return 'peso';
  }

  public function getMinorUnit()
  {
    return 'centavo';
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
