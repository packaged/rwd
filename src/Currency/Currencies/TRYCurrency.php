<?php
namespace Packaged\Rwd\Currency\Currencies;

use Packaged\Rwd\Currency\AbstractCurrency;

class TRYCurrency extends AbstractCurrency
{
  public function getSymbol()
  {
    return '';
  }

  public function getCode()
  {
    return 'TRY';
  }

  public function getNumericCode()
  {
    return 949;
  }

  public function getName()
  {
    return 'New Turkish Lira';
  }

  public function getMajorUnit()
  {
    return 'lira';
  }

  public function getMinorUnit()
  {
    return 'kurus';
  }
}
