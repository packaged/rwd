<?php
namespace Packaged\Rwd\Currency\Currencies;

use Packaged\Rwd\Currency\AbstractCurrency;

class CHFCurrency extends AbstractCurrency
{
  public function getSymbol()
  {
    return 'CHF';
  }

  public function getCode()
  {
    return 'CHF';
  }

  public function getNumericCode()
  {
    return 756;
  }

  public function getName()
  {
    return 'Swiss Franc';
  }

  public function getMajorUnit()
  {
    return 'franken';
  }

  public function getMinorUnit()
  {
    return 'rappen';
  }

  public function getThousandSeparator()
  {
    return '\'';
  }
}
