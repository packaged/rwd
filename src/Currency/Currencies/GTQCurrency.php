<?php
namespace Fortifi\Rwd\Currency\Currencies;

use Fortifi\Rwd\Currency\AbstractCurrency;

class GTQCurrency extends AbstractCurrency
{
  public function getSymbol()
  {
    return 'Q';
  }

  public function getCode()
  {
    return 'GTQ';
  }

  public function getNumericCode()
  {
    return 320;
  }

  public function getName()
  {
    return 'Guatemala, Quetzal';
  }

  public function getMajorUnit()
  {
    return 'quetzal';
  }

  public function getMinorUnit()
  {
    return 'centavo';
  }
}
