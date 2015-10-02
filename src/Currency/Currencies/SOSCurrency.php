<?php
namespace Packaged\Rwd\Currency\Currencies;

use Packaged\Rwd\Currency\AbstractCurrency;

class SOSCurrency extends AbstractCurrency
{
  public function getSymbol()
  {
    return 'S';
  }

  public function getCode()
  {
    return 'SOS';
  }

  public function getNumericCode()
  {
    return 706;
  }

  public function getName()
  {
    return 'Somali Shilling';
  }

  public function getMajorUnit()
  {
    return 'shilling';
  }

  public function getMinorUnit()
  {
    return 'centesimi';
  }
}
