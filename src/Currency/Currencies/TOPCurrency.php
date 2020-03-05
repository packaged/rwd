<?php
namespace Packaged\Rwd\Currency\Currencies;

use Packaged\Rwd\Currency\AbstractCurrency;

class TOPCurrency extends AbstractCurrency
{
  public function getDecimalCount()
  {
    return 2;
  }
  
  public function getSymbol()
  {
    return 'TOP';
  }

  public function getCode()
  {
    return 'TOP';
  }

  public function getNumericCode()
  {
    return '776';
  }

  public function getName()
  {
    return 'Tonga, Paanga';
  }

  public function getMajorUnit()
  {
    return 'pa\'anga';
  }

  public function getMinorUnit()
  {
    return 'seniti';
  }

  public function getUSDAverage()
  {
    return 1.9389;
  }
}
