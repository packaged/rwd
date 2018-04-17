<?php
namespace Packaged\Rwd\Currency\Currencies;

use Packaged\Rwd\Currency\AbstractCurrency;

class HUFCurrency extends AbstractCurrency
{
  public function getSymbol()
  {
    return 'Ft';
  }

  public function getCode()
  {
    return 'HUF';
  }

  public function getNumericCode()
  {
    return '348';
  }

  public function getName()
  {
    return 'Hungary, Forint';
  }

  public function getMajorUnit()
  {
    return 'forint';
  }

  public function getMinorUnit()
  {
    return ' ';
  }

  public function getUSDAverage()
  {
    return 213.5788;
  }

  public function getThousandSeparator()
  {
    return '.';
  }
}
