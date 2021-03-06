<?php
namespace Packaged\Rwd\Country\Countries;

use Packaged\Rwd\Country\CountryInterface;

class BTCountry implements CountryInterface
{
  public function getName()
  {
    return 'Bhutan';
  }

  public function getIso2()
  {
    return 'BT';
  }

  public function getIso3()
  {
    return 'BTN';
  }

  public function getWmo()
  {
    return ' ';
  }

  public function getNumericCode()
  {
    return 64;
  }

  public function getDialPrefix()
  {
    return 975;
  }

  public function getCurrencyCode()
  {
    return 'INR';
  }
}
