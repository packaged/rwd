<?php
namespace Fortifi\Rwd\Currency\Currencies;

use Fortifi\Rwd\Currency\AbstractCurrency;

class ALLCurrency extends AbstractCurrency
{
  public function getSymbol()
  {
    return 'Lek';
  }

  public function getCode()
  {
    return 'ALL';
  }

  public function getNumericCode()
  {
    return 8;
  }

  public function getName()
  {
    return 'Albania, Lek';
  }

  public function getMajorUnit()
  {
    return 'lek';
  }

  public function getMinorUnit()
  {
    return 'qindarka';
  }
}
