<?php
namespace Fortifi\Rwd\Currency\Currencies;

use Fortifi\Rwd\Currency\AbstractCurrency;

class YERCurrency extends AbstractCurrency
{
  public function getSymbol()
  {
    return '﷼';
  }

  public function getCode()
  {
    return 'YER';
  }

  public function getNumericCode()
  {
    return 886;
  }

  public function getName()
  {
    return 'Yemeni Rial';
  }

  public function getMajorUnit()
  {
    return 'rial';
  }

  public function getMinorUnit()
  {
    return 'fil';
  }
}
