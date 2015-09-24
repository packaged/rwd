<?php
namespace Fortifi\Rwd\Currency\Currencies;

use Fortifi\Rwd\Currency\AbstractCurrency;

class ISKCurrency extends AbstractCurrency
{
  public function getSymbol()
  {
    return 'kr';
  }

  public function getCode()
  {
    return 'ISK';
  }

  public function getNumericCode()
  {
    return 352;
  }

  public function getName()
  {
    return 'Iceland Krona';
  }

  public function getMajorUnit()
  {
    return 'króna';
  }

  public function getMinorUnit()
  {
    return 'aurar';
  }

  public function getThousandSeparator()
  {
    return '.';
  }
}
