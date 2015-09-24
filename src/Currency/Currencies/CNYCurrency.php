<?php
namespace Fortifi\Rwd\Currency\Currencies;

use Fortifi\Rwd\Currency\AbstractCurrency;

class CNYCurrency extends AbstractCurrency
{
  public function getSymbol()
  {
    return '¥';
  }

  public function getCode()
  {
    return 'CNY';
  }

  public function getNumericCode()
  {
    return 156;
  }

  public function getName()
  {
    return 'China Yuan Renminbi';
  }

  public function getMajorUnit()
  {
    return 'yuan renminbi';
  }

  public function getMinorUnit()
  {
    return 'jiao';
  }
}
