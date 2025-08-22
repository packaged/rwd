<?php
namespace Packaged\Rwd\Currency\Currencies;

use Packaged\Rwd\Currency\AbstractCurrency;

class XOFCurrency extends AbstractCurrency
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
    return 'XOF';
  }

  public function getNumericCode()
  {
    return '952';
  }

  public function getName()
  {
    return 'CFA Franc BCEAO';
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
}
