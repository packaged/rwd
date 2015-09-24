<?php
namespace Fortifi\Rwd\Currency\Currencies;

use Fortifi\Rwd\Currency\AbstractCurrency;

class TOPCurrency extends AbstractCurrency
{
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
    return 776;
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
}
