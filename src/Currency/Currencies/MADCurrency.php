<?php
namespace Packaged\Rwd\Currency\Currencies;

use Packaged\Rwd\Currency\AbstractCurrency;

class MADCurrency extends AbstractCurrency
{
  public function getSymbol()
  {
    return 'MAD';
  }

  public function getCode()
  {
    return 'MAD';
  }

  public function getNumericCode()
  {
    return 504;
  }

  public function getName()
  {
    return 'Moroccan Dirham';
  }

  public function getMajorUnit()
  {
    return 'dirham';
  }

  public function getMinorUnit()
  {
    return 'centime';
  }
}
