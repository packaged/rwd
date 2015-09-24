<?php
namespace Fortifi\Rwd\Currency\Currencies;

use Fortifi\Rwd\Currency\AbstractCurrency;

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
}
