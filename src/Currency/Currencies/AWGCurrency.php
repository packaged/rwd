<?php
namespace Packaged\Rwd\Currency\Currencies;

use Packaged\Rwd\Currency\AbstractCurrency;

class AWGCurrency extends AbstractCurrency
{
  public function getSymbol()
  {
    return 'ƒ';
  }

  public function getCode()
  {
    return 'AWG';
  }

  public function getNumericCode()
  {
    return 533;
  }

  public function getName()
  {
    return 'Aruban Guilder';
  }

  public function getMajorUnit()
  {
    return 'guilder';
  }

  public function getMinorUnit()
  {
    return 'cent';
  }

  public function getUSDAverage()
  {
    return 1.7906;
  }
}
