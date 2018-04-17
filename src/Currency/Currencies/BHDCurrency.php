<?php
namespace Packaged\Rwd\Currency\Currencies;

use Packaged\Rwd\Currency\AbstractCurrency;

class BHDCurrency extends AbstractCurrency
{
  public function getSymbol()
  {
    return 'BHD';
  }

  public function getCode()
  {
    return 'BHD';
  }

  public function getNumericCode()
  {
    return '048';
  }

  public function getName()
  {
    return 'Bahraini Dinar';
  }

  public function getMajorUnit()
  {
    return 'dinar';
  }

  public function getMinorUnit()
  {
    return 'fils';
  }

  public function getUSDAverage()
  {
    return 0.377;
  }
}
