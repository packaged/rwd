<?php
namespace Packaged\Rwd\Currency\Currencies;

use Packaged\Rwd\Currency\AbstractCurrency;

class MROCurrency extends AbstractCurrency
{
  public function getSymbol()
  {
    return 'MRO';
  }

  public function getCode()
  {
    return 'MRO';
  }

  public function getNumericCode()
  {
    return 478;
  }

  public function getName()
  {
    return 'Mauritania, Ouguiya';
  }

  public function getMajorUnit()
  {
    return 'ouguiya (5 khoums)';
  }

  public function getMinorUnit()
  {
    return 'khoum';
  }
}
