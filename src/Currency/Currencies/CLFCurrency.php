<?php
namespace Fortifi\Rwd\Currency\Currencies;

use Fortifi\Rwd\Currency\AbstractCurrency;

class CLFCurrency extends AbstractCurrency
{
  public function getSymbol()
  {
    return 'CLF';
  }

  public function getCode()
  {
    return 'CLF';
  }

  public function getNumericCode()
  {
    return 990;
  }

  public function getName()
  {
    return 'Unidad de Fomento';
  }

  public function getMajorUnit()
  {
    return 'UF';
  }

  public function getMinorUnit()
  {
    return ' ';
  }
}
