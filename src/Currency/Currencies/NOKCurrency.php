<?php
namespace Fortifi\Rwd\Currency\Currencies;

use Fortifi\Rwd\Currency\AbstractCurrency;

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
