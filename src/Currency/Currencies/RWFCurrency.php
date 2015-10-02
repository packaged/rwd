<?php
namespace Packaged\Rwd\Currency\Currencies;

use Packaged\Rwd\Currency\AbstractCurrency;

class RWFCurrency extends AbstractCurrency
{
  public function getSymbol()
  {
    return 'RWF';
  }

  public function getCode()
  {
    return 'RWF';
  }

  public function getNumericCode()
  {
    return 646;
  }

  public function getName()
  {
    return 'Rwanda Franc';
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
