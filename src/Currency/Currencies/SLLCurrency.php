<?php
namespace Fortifi\Rwd\Currency\Currencies;

use Fortifi\Rwd\Currency\AbstractCurrency;

class SLLCurrency extends AbstractCurrency
{
  public function getSymbol()
  {
    return 'SLL';
  }

  public function getCode()
  {
    return 'SLL';
  }

  public function getNumericCode()
  {
    return 694;
  }

  public function getName()
  {
    return 'Sierra Leone, Leone';
  }

  public function getMajorUnit()
  {
    return 'leone';
  }

  public function getMinorUnit()
  {
    return 'cent';
  }
}
