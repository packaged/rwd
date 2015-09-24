<?php
namespace Fortifi\Rwd\Currency\Currencies;

use Fortifi\Rwd\Currency\AbstractCurrency;

class PABCurrency extends AbstractCurrency
{
  public function getSymbol()
  {
    return 'B/.';
  }

  public function getCode()
  {
    return 'PAB';
  }

  public function getNumericCode()
  {
    return 590;
  }

  public function getName()
  {
    return 'Panama, Balboa';
  }

  public function getMajorUnit()
  {
    return 'balboa';
  }

  public function getMinorUnit()
  {
    return 'centesimo';
  }
}
