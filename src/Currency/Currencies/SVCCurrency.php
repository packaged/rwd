<?php
namespace Packaged\Rwd\Currency\Currencies;

use Packaged\Rwd\Currency\AbstractCurrency;

class SVCCurrency extends AbstractCurrency
{
  public function getSymbol()
  {
    return '$';
  }

  public function getCode()
  {
    return 'SVC';
  }

  public function getNumericCode()
  {
    return 222;
  }

  public function getName()
  {
    return 'El Salvador Colon';
  }

  public function getMajorUnit()
  {
    return 'colon';
  }

  public function getMinorUnit()
  {
    return 'centavo';
  }

  public function getUSDAverage()
  {
    return 8.7492;
  }
}
