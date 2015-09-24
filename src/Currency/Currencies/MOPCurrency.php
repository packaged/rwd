<?php
namespace Fortifi\Rwd\Currency\Currencies;

use Fortifi\Rwd\Currency\AbstractCurrency;

class MOPCurrency extends AbstractCurrency
{
  public function getSymbol()
  {
    return 'MOP';
  }

  public function getCode()
  {
    return 'MOP';
  }

  public function getNumericCode()
  {
    return 446;
  }

  public function getName()
  {
    return 'Macao, Pataca';
  }

  public function getMajorUnit()
  {
    return 'pataca';
  }

  public function getMinorUnit()
  {
    return 'avo';
  }
}
