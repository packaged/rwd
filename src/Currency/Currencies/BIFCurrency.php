<?php
namespace Fortifi\Rwd\Currency\Currencies;

use Fortifi\Rwd\Currency\AbstractCurrency;

class BIFCurrency extends AbstractCurrency
{
  public function getSymbol()
  {
    return 'BIF';
  }

  public function getCode()
  {
    return 'BIF';
  }

  public function getNumericCode()
  {
    return 108;
  }

  public function getName()
  {
    return 'Burundi Franc';
  }

  public function getMajorUnit()
  {
    return 'franc';
  }

  public function getMinorUnit()
  {
    return 'centime';
  }
}
