<?php
namespace Packaged\Rwd\Currency\Currencies;

use Packaged\Rwd\Currency\AbstractCurrency;

class BZDCurrency extends AbstractCurrency
{
  public function getSymbol()
  {
    return 'BZ$';
  }

  public function getCode()
  {
    return 'BZD';
  }

  public function getNumericCode()
  {
    return 84;
  }

  public function getName()
  {
    return 'Belize Dollar';
  }

  public function getMajorUnit()
  {
    return 'dollar';
  }

  public function getMinorUnit()
  {
    return 'cent';
  }
}
