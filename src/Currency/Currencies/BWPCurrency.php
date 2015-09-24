<?php
namespace Fortifi\Rwd\Currency\Currencies;

use Fortifi\Rwd\Currency\AbstractCurrency;

class BWPCurrency extends AbstractCurrency
{
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
    return 72;
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
}
