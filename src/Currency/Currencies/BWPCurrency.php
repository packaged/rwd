<?php
namespace Packaged\Rwd\Currency\Currencies;

use Packaged\Rwd\Currency\AbstractCurrency;

class BWPCurrency extends AbstractCurrency
{
  public function getDecimalCount()
  {
    return 2;
  }
  
  public function getSymbol()
  {
    return 'P';
  }

  public function getCode()
  {
    return 'BWP';
  }

  public function getNumericCode()
  {
    return '072';
  }

  public function getName()
  {
    return 'Botswana, Pula';
  }

  public function getMajorUnit()
  {
    return 'pula';
  }

  public function getMinorUnit()
  {
    return 'thebe';
  }

  public function getUSDAverage()
  {
    return 7.4537;
  }
}
