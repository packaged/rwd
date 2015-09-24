<?php
namespace Fortifi\Rwd\Currency\Currencies;

use Fortifi\Rwd\Currency\AbstractCurrency;

class GMDCurrency extends AbstractCurrency
{
  public function getSymbol()
  {
    return 'GMD';
  }

  public function getCode()
  {
    return 'GMD';
  }

  public function getNumericCode()
  {
    return 270;
  }

  public function getName()
  {
    return 'Gambia, Dalasi';
  }

  public function getMajorUnit()
  {
    return 'dalasi';
  }

  public function getMinorUnit()
  {
    return 'butut';
  }
}
