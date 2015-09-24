<?php
namespace Fortifi\Rwd\Currency\Currencies;

use Fortifi\Rwd\Currency\AbstractCurrency;

class KWDCurrency extends AbstractCurrency
{
  public function getSymbol()
  {
    return 'KWD';
  }

  public function getCode()
  {
    return 'KWD';
  }

  public function getNumericCode()
  {
    return 414;
  }

  public function getName()
  {
    return 'Kuwaiti Dinar';
  }

  public function getMajorUnit()
  {
    return 'dinar';
  }

  public function getMinorUnit()
  {
    return 'fil';
  }
}
