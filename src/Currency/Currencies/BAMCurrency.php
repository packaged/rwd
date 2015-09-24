<?php
namespace Fortifi\Rwd\Currency\Currencies;

use Fortifi\Rwd\Currency\AbstractCurrency;

class BAMCurrency extends AbstractCurrency
{
  public function getSymbol()
  {
    return 'KM';
  }

  public function getCode()
  {
    return 'BAM';
  }

  public function getNumericCode()
  {
    return 977;
  }

  public function getName()
  {
    return 'Bosnia and Herzegovina, Convertible Marks';
  }

  public function getMajorUnit()
  {
    return 'marka';
  }

  public function getMinorUnit()
  {
    return 'fenning';
  }
}
