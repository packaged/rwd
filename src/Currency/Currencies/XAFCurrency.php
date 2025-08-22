<?php
namespace Packaged\Rwd\Currency\Currencies;

use Packaged\Rwd\Currency\AbstractCurrency;

class XAFCurrency extends AbstractCurrency
{
  public function getDecimalCount()
  {
    return 0;
  }

  public function getSymbol()
  {
    return '₣';
  }

  public function getCode()
  {
    return 'XAF';
  }

  public function getNumericCode()
  {
    return '950';
  }

  public function getName()
  {
    return 'CFA Franc BEAC';
  }

  public function getMajorUnit()
  {
    return 'franc';
  }

  public function getMinorUnit()
  {
    return 'centime';
  }

  public function getUSDAverage()
  {
    return 0.0018;
  }

  public function getThousandSeparator()
  {
    return ' ';
  }
}
