<?php
namespace Packaged\Rwd\Currency\Currencies;

use Packaged\Rwd\Currency\AbstractCurrency;

class SDDCurrency extends AbstractCurrency
{
  public function getSymbol()
  {
    return 'SDD';
  }

  public function getCode()
  {
    return 'SDD';
  }

  public function getNumericCode()
  {
    return 736;
  }

  public function getName()
  {
    return 'Sudanese Dinar';
  }

  public function getMajorUnit()
  {
    return 'dinar';
  }

  public function getMinorUnit()
  {
    return ' ';
  }
}
