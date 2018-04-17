<?php
namespace Packaged\Rwd\Currency\Currencies;

use Packaged\Rwd\Currency\AbstractCurrency;

class NPRCurrency extends AbstractCurrency
{
  public function getSymbol()
  {
    return '₨';
  }

  public function getCode()
  {
    return 'NPR';
  }

  public function getNumericCode()
  {
    return '524';
  }

  public function getName()
  {
    return 'Nepalese Rupee';
  }

  public function getMajorUnit()
  {
    return 'rupee';
  }

  public function getMinorUnit()
  {
    return 'paise';
  }

  public function getUSDAverage()
  {
    return 81.1216;
  }
}
