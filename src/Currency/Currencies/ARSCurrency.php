<?php
namespace Fortifi\Rwd\Currency\Currencies;

use Fortifi\Rwd\Currency\AbstractCurrency;

class ARSCurrency extends AbstractCurrency
{
  public function getSymbol()
  {
    return '$';
  }

  public function getCode()
  {
    return 'ARS';
  }

  public function getNumericCode()
  {
    return 32;
  }

  public function getName()
  {
    return 'Argentine Peso';
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
