<?php
namespace Fortifi\Rwd\Currency\Currencies;

use Fortifi\Rwd\Currency\AbstractCurrency;

class AMDCurrency extends AbstractCurrency
{
  public function getSymbol()
  {
    return 'AMD';
  }

  public function getCode()
  {
    return 'AMD';
  }

  public function getNumericCode()
  {
    return 51;
  }

  public function getName()
  {
    return 'Armenian Dram';
  }

  public function getMajorUnit()
  {
    return 'dram';
  }

  public function getMinorUnit()
  {
    return 'luma';
  }
}
