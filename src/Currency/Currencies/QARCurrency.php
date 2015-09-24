<?php
namespace Fortifi\Rwd\Currency\Currencies;

use Fortifi\Rwd\Currency\AbstractCurrency;

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
}
