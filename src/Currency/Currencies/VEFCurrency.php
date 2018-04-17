<?php
namespace Packaged\Rwd\Currency\Currencies;

use Packaged\Rwd\Currency\AbstractCurrency;

class VEFCurrency extends AbstractCurrency
{
  public function getSymbol()
  {
    return 'Bs';
  }

  public function getCode()
  {
    return 'VEF';
  }

  public function getNumericCode()
  {
    return '862';
  }

  public function getName()
  {
    return 'Venezuela Bolivares Fuertes';
  }

  public function getMajorUnit()
  {
    return 'bolivar';
  }

  public function getMinorUnit()
  {
    return 'centimo';
  }

  public function getUSDAverage()
  {
    return 3.5754;
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
