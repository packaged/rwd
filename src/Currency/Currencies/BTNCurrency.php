<?php
namespace Packaged\Rwd\Currency\Currencies;

use Packaged\Rwd\Currency\AbstractCurrency;

class BTNCurrency extends AbstractCurrency
{
  public function getSymbol()
  {
    return 'BTN';
  }

  public function getCode()
  {
    return 'BTN';
  }

  public function getNumericCode()
  {
    return '064';
  }

  public function getName()
  {
    return 'Bhutan, Ngultrum';
  }

  public function getMajorUnit()
  {
    return 'ngultrum';
  }

  public function getMinorUnit()
  {
    return 'chetrum';
  }

  public function getUSDAverage()
  {
    return 50.8743;
  }
}
