<?php
namespace Packaged\Rwd\Currency\Currencies;

use Packaged\Rwd\Currency\AbstractCurrency;

class KZTCurrency extends AbstractCurrency
{
  public function getSymbol()
  {
    return 'лв';
  }

  public function getCode()
  {
    return 'KZT';
  }

  public function getNumericCode()
  {
    return 398;
  }

  public function getName()
  {
    return 'Kazakhstan, Tenge';
  }

  public function getMajorUnit()
  {
    return 'tenge';
  }

  public function getMinorUnit()
  {
    return 'tiyn';
  }
}
