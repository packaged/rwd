<?php
namespace Fortifi\Rwd\Currency\Currencies;

use Fortifi\Rwd\Currency\AbstractCurrency;

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
    return 524;
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
}
