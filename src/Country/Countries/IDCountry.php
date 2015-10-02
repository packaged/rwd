<?php
namespace Packaged\Rwd\Country\Countries;

use Packaged\Rwd\Country\Country;

class IDCountry implements Country
{
  public function getName()
  {
    return 'Indonesia';
  }

  public function getIso2()
  {
    return 'ID';
  }

  public function getIso3()
  {
    return 'IDN';
  }

  public function getWmo()
  {
    return 'ID';
  }

  public function getNumericCode()
  {
    return 360;
  }

  public function getDialPrefix()
  {
    return 62;
  }

  public function getCurrencyCode()
  {
    return 'IDR';
  }
}
