<?php
namespace Fortifi\Rwd\Currency\Currencies;

use Fortifi\Rwd\Currency\AbstractCurrency;

class INRCurrency extends AbstractCurrency
{
  public function getSymbol()
  {
    return '';
  }

  public function getCode()
  {
    return 'INR';
  }

  public function getNumericCode()
  {
    return 356;
  }

  public function getName()
  {
    return 'Indian Rupee';
  }

  public function getMajorUnit()
  {
    return 'rupee';
  }

  public function getMinorUnit()
  {
    return 'paise';
  }
}
