<?php
namespace Packaged\Rwd\Currency\Currencies;

use Packaged\Rwd\Currency\AbstractCurrency;

class CRCCurrency extends AbstractCurrency
{
  public function getSymbol()
  {
    return '₡';
  }

  public function getCode()
  {
    return 'CRC';
  }

  public function getNumericCode()
  {
    return 188;
  }

  public function getName()
  {
    return 'Costa Rican Colon';
  }

  public function getMajorUnit()
  {
    return 'colon';
  }

  public function getMinorUnit()
  {
    return 'centimo';
  }

  public function getUSDAverage()
  {
    return 522.5419;
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
