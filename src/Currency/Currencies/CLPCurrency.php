<?php
namespace Packaged\Rwd\Currency\Currencies;

use Packaged\Rwd\Currency\AbstractCurrency;

class CLPCurrency extends AbstractCurrency
{
  public function getSymbol()
  {
    return '$';
  }

  public function getCode()
  {
    return 'CLP';
  }

  public function getNumericCode()
  {
    return 152;
  }

  public function getName()
  {
    return 'Chilean Peso';
  }

  public function getMajorUnit()
  {
    return 'peso';
  }

  public function getMinorUnit()
  {
    return 'centavo';
  }

  public function getUSDAverage()
  {
    return 532.1953;
  }

  public function getThousandSeparator()
  {
    return '.';
  }
}
