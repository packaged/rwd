<?php
namespace Fortifi\Rwd\Currency\Currencies;

use Fortifi\Rwd\Currency\AbstractCurrency;

class JODCurrency extends AbstractCurrency
{
  public function getSymbol()
  {
    return 'JOD';
  }

  public function getCode()
  {
    return 'JOD';
  }

  public function getNumericCode()
  {
    return 400;
  }

  public function getName()
  {
    return 'Jordanian Dinar';
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
