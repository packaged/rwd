<?php
namespace Packaged\Rwd\Currency\Currencies;

use Packaged\Rwd\Currency\AbstractCurrency;

class NOKCurrency extends AbstractCurrency
{
  public function getSymbol()
  {
    return 'kr';
  }

  public function getCode()
  {
    return 'NOK';
  }

  public function getNumericCode()
  {
    return 578;
  }

  public function getName()
  {
    return 'Norwegian Krone';
  }

  public function getMajorUnit()
  {
    return 'krone';
  }

  public function getMinorUnit()
  {
    return 'øre';
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
