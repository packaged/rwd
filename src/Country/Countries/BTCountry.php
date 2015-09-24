<?php
namespace Fortifi\Rwd\Country\Countries;

use Fortifi\Rwd\Country\Country;

class BTCountry implements Country
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
