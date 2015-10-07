<?php
namespace Packaged\Rwd\Currency\Currencies;

use Packaged\Rwd\Currency\AbstractCurrency;

class QARCurrency extends AbstractCurrency
{
  public function getSymbol()
  {
    return '﷼';
  }

  public function getCode()
  {
    return 'QAR';
  }

  public function getNumericCode()
  {
    return 634;
  }

  public function getName()
  {
    return 'Qatari Rial';
  }

  public function getMajorUnit()
  {
    return 'riyal';
  }

  public function getMinorUnit()
  {
    return 'dirham';
  }

  public function getUSDAverage()
  {
    return 3.6406;
  }
}
