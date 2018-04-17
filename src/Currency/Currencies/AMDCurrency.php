<?php
namespace Packaged\Rwd\Currency\Currencies;

use Packaged\Rwd\Currency\AbstractCurrency;

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
    return '051';
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

  public function getUSDAverage()
  {
    return 388.2816;
  }
}
