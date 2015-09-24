<?php
namespace Fortifi\Rwd\Currency\Currencies;

use Fortifi\Rwd\Currency\AbstractCurrency;

class IRRCurrency extends AbstractCurrency
{
  public function getSymbol()
  {
    return '﷼';
  }

  public function getCode()
  {
    return 'IRR';
  }

  public function getNumericCode()
  {
    return 364;
  }

  public function getName()
  {
    return 'Iranian Rial';
  }

  public function getMajorUnit()
  {
    return 'rial';
  }

  public function getMinorUnit()
  {
    return 'rials';
  }
}
