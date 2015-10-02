<?php
namespace Packaged\Rwd\Currency\Currencies;

use Packaged\Rwd\Currency\AbstractCurrency;

class DOPCurrency extends AbstractCurrency
{
  public function getSymbol()
  {
    return 'RD$';
  }

  public function getCode()
  {
    return 'DOP';
  }

  public function getNumericCode()
  {
    return 214;
  }

  public function getName()
  {
    return 'Dominican Peso';
  }

  public function getMajorUnit()
  {
    return 'peso';
  }

  public function getMinorUnit()
  {
    return 'centavo';
  }
}
