<?php
namespace Packaged\Rwd\Currency\Currencies;

use Packaged\Rwd\Currency\AbstractCurrency;

class VNDCurrency extends AbstractCurrency
{
  public function getSymbol()
  {
    return '₫';
  }

  public function getCode()
  {
    return 'VND';
  }

  public function getNumericCode()
  {
    return 704;
  }

  public function getName()
  {
    return 'Viet Nam, Dong';
  }

  public function getMajorUnit()
  {
    return 'new dong';
  }

  public function getMinorUnit()
  {
    return 'hao,xu';
  }

  public function getDecimalSeparator()
  {
    return '#';
  }

  public function getThousandSeparator()
  {
    return '.';
  }
}
