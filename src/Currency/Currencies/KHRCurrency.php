<?php
namespace Packaged\Rwd\Currency\Currencies;

use Packaged\Rwd\Currency\AbstractCurrency;

class KHRCurrency extends AbstractCurrency
{
  public function getSymbol()
  {
    return '៛';
  }

  public function getCode()
  {
    return 'KHR';
  }

  public function getNumericCode()
  {
    return 116;
  }

  public function getName()
  {
    return 'Cambodia, Riel';
  }

  public function getMajorUnit()
  {
    return 'new riel';
  }

  public function getMinorUnit()
  {
    return 'sen';
  }
}
