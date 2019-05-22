<?php
namespace Packaged\Rwd\Currency\Currencies;

use Packaged\Rwd\Currency\AbstractCurrency;

class USDCurrency extends AbstractCurrency
{
  public function getSymbol()
  {
    return '$';
  }

  public function getCode()
  {
    return 'USD';
  }

  public function getNumericCode()
  {
    return '840';
  }

  public function getName()
  {
    return 'US Dollar';
  }

  public function getMajorUnit()
  {
    return 'dollar';
  }

  public function getMinorUnit()
  {
    return 'cent';
  }

  public function getUSDAverage()
  {
    return 1;
  }

  protected function _getRenderFormat($amount)
  {
    $format = parent::_getRenderFormat(0);
    if($amount < 0)
    {
      $format = '(' . $format . ')';
    }
    return $format;
  }
}
