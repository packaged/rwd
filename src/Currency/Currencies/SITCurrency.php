<?php
namespace Packaged\Rwd\Currency\Currencies;

use Packaged\Rwd\Currency\AbstractCurrency;

class SITCurrency extends AbstractCurrency
{
  public function getSymbol()
  {
    return 'SIT';
  }

  public function getCode()
  {
    return 'SIT';
  }

  public function getNumericCode()
  {
    return '705';
  }

  public function getName()
  {
    return 'Slovenia, Tolar';
  }

  public function getMajorUnit()
  {
    return 'tolar';
  }

  public function getMinorUnit()
  {
    return 'stotin';
  }

  public function getUSDAverage()
  {
    return 182.4828;
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
