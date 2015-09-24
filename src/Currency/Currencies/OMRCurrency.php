<?php
namespace Fortifi\Rwd\Currency\Currencies;

use Fortifi\Rwd\Currency\AbstractCurrency;

class OMRCurrency extends AbstractCurrency
{
  public function getSymbol()
  {
    return '﷼';
  }

  public function getCode()
  {
    return 'OMR';
  }

  public function getNumericCode()
  {
    return 512;
  }

  public function getName()
  {
    return 'Rial Omani';
  }

  public function getMajorUnit()
  {
    return 'rial';
  }

  public function getMinorUnit()
  {
    return 'baiza';
  }
}
