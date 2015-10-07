<?php
namespace Packaged\Rwd\Currency\Currencies;

use Packaged\Rwd\Currency\AbstractCurrency;

class BGNCurrency extends AbstractCurrency
{
  public function getSymbol()
  {
    return 'лв';
  }

  public function getCode()
  {
    return 'BGN';
  }

  public function getNumericCode()
  {
    return 975;
  }

  public function getName()
  {
    return 'Bulgarian Lev';
  }

  public function getMajorUnit()
  {
    return 'leva';
  }

  public function getMinorUnit()
  {
    return 'stotinki';
  }

  public function getUSDAverage()
  {
    return 1.4837;
  }
}
