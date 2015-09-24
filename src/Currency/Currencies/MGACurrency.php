<?php
namespace Fortifi\Rwd\Currency\Currencies;

use Fortifi\Rwd\Currency\AbstractCurrency;

class MGACurrency extends AbstractCurrency
{
  public function getSymbol()
  {
    return 'MGA';
  }

  public function getCode()
  {
    return 'MGA';
  }

  public function getNumericCode()
  {
    return 969;
  }

  public function getName()
  {
    return 'Malagasy Ariary';
  }

  public function getMajorUnit()
  {
    return 'ariary';
  }

  public function getMinorUnit()
  {
    return ' ';
  }
}
