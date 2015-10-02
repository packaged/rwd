<?php
namespace Packaged\Rwd\Currency\Currencies;

use Packaged\Rwd\Currency\AbstractCurrency;

class HNLCurrency extends AbstractCurrency
{
  public function getSymbol()
  {
    return 'L';
  }

  public function getCode()
  {
    return 'HNL';
  }

  public function getNumericCode()
  {
    return 340;
  }

  public function getName()
  {
    return 'Honduras, Lempira';
  }

  public function getMajorUnit()
  {
    return 'lempira';
  }

  public function getMinorUnit()
  {
    return 'centavo';
  }
}
