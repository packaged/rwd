<?php
namespace Packaged\Rwd\Currency\Currencies;

use Packaged\Rwd\Currency\AbstractCurrency;

class KGSCurrency extends AbstractCurrency
{
  public function getSymbol()
  {
    return 'лв';
  }

  public function getCode()
  {
    return 'KGS';
  }

  public function getNumericCode()
  {
    return 417;
  }

  public function getName()
  {
    return 'Kyrgyzstan, Som';
  }

  public function getMajorUnit()
  {
    return 'som';
  }

  public function getMinorUnit()
  {
    return 'tyyn';
  }

  public function getUSDAverage()
  {
    return 46.3386;
  }
}
