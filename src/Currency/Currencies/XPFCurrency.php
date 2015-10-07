<?php
namespace Packaged\Rwd\Currency\Currencies;

use Packaged\Rwd\Currency\AbstractCurrency;

class XPFCurrency extends AbstractCurrency
{
  public function getSymbol()
  {
    return 'CFPF';
  }

  public function getCode()
  {
    return 'XPF';
  }

  public function getNumericCode()
  {
    return 953;
  }

  public function getName()
  {
    return 'CFP Franc';
  }

  public function getMajorUnit()
  {
    return 'franc';
  }

  public function getMinorUnit()
  {
    return 'centime';
  }

  public function getUSDAverage()
  {
    return 90.5607;
  }
}
