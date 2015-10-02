<?php
namespace Packaged\Rwd\Currency\Currencies;

use Packaged\Rwd\Currency\AbstractCurrency;

class CUPCurrency extends AbstractCurrency
{
  public function getSymbol()
  {
    return '₱';
  }

  public function getCode()
  {
    return 'CUP';
  }

  public function getNumericCode()
  {
    return 192;
  }

  public function getName()
  {
    return 'Cuban Peso';
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
