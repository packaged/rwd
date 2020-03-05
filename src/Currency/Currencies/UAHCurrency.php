<?php
namespace Packaged\Rwd\Currency\Currencies;

use Packaged\Rwd\Currency\AbstractCurrency;

class UAHCurrency extends AbstractCurrency
{
  public function getDecimalCount()
  {
    return 2;
  }
  
  public function getSymbol()
  {
    return '₴';
  }

  public function getCode()
  {
    return 'UAH';
  }

  public function getNumericCode()
  {
    return '980';
  }

  public function getName()
  {
    return 'Ukraine, Hryvnia';
  }

  public function getMajorUnit()
  {
    return 'Hryvnia';
  }

  public function getMinorUnit()
  {
    return 'kopiyka';
  }

  public function getUSDAverage()
  {
    return 8.8956;
  }

  public function getDecimalSeparator()
  {
    return ',';
  }

  public function getThousandSeparator()
  {
    return ' ';
  }
}
