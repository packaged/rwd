<?php
namespace Packaged\Rwd\Currency\Currencies;

use Packaged\Rwd\Currency\AbstractCurrency;

class GNFCurrency extends AbstractCurrency
{
  public function getDecimalCount()
  {
    return 0;
  }

  public function getSymbol()
  {
    return 'FG';
  }

  public function getCode()
  {
    return 'GNF';
  }

  public function getNumericCode()
  {
    return '324';
  }

  public function getName()
  {
    return 'Guinea Franc';
  }

  public function getMajorUnit()
  {
    return 'franc';
  }

  public function getMinorUnit()
  {
    return 'centimes';
  }

  public function getUSDAverage()
  {
    return 0.00012;
  }
}
