<?php
namespace Fortifi\Rwd\Currency\Currencies;

use Fortifi\Rwd\Currency\AbstractCurrency;

class IQDCurrency extends AbstractCurrency
{
  public function getSymbol()
  {
    return 'IQD';
  }

  public function getCode()
  {
    return 'IQD';
  }

  public function getNumericCode()
  {
    return 368;
  }

  public function getName()
  {
    return 'Iraqi Dinar';
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
