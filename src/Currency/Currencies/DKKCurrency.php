<?php
namespace Packaged\Rwd\Currency\Currencies;

use Packaged\Rwd\Currency\AbstractCurrency;

class DKKCurrency extends AbstractCurrency
{
  public function getSymbol()
  {
    return 'kr';
  }

  public function getCode()
  {
    return 'DKK';
  }

  public function getNumericCode()
  {
    return '208';
  }

  public function getName()
  {
    return 'Danish Krone';
  }

  public function getMajorUnit()
  {
    return 'krone';
  }

  public function getMinorUnit()
  {
    return 'øre';
  }

  public function getUSDAverage()
  {
    return 5.6531;
  }

  public function getDecimalSeparator()
  {
    return ',';
  }

  public function getThousandSeparator()
  {
    return '.';
  }
}
