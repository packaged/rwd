<?php
namespace Packaged\Rwd\Currency\Currencies;

use Packaged\Rwd\Currency\AbstractCurrency;

class SARCurrency extends AbstractCurrency
{
  public function getSymbol()
  {
    return '﷼';
  }

  public function getCode()
  {
    return 'SAR';
  }

  public function getNumericCode()
  {
    return 682;
  }

  public function getName()
  {
    return 'Saudi Riyal';
  }

  public function getMajorUnit()
  {
    return 'riyal';
  }

  public function getMinorUnit()
  {
    return 'halalat';
  }
}
