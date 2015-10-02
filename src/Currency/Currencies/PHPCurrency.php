<?php
namespace Packaged\Rwd\Currency\Currencies;

use Packaged\Rwd\Currency\AbstractCurrency;

class PHPCurrency extends AbstractCurrency
{
  public function getSymbol()
  {
    return '₱';
  }

  public function getCode()
  {
    return 'PHP';
  }

  public function getNumericCode()
  {
    return 608;
  }

  public function getName()
  {
    return 'Philippine Peso';
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
