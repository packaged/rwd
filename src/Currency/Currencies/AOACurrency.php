<?php
namespace Fortifi\Rwd\Currency\Currencies;

use Fortifi\Rwd\Currency\AbstractCurrency;

class AOACurrency extends AbstractCurrency
{
  public function getSymbol()
  {
    return 'AOA';
  }

  public function getCode()
  {
    return 'AOA';
  }

  public function getNumericCode()
  {
    return 973;
  }

  public function getName()
  {
    return 'Angola, Kwanza';
  }

  public function getMajorUnit()
  {
    return 'kwanza';
  }

  public function getMinorUnit()
  {
    return 'lwei';
  }
}
