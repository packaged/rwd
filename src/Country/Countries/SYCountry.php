<?php
namespace Packaged\Rwd\Country\Countries;

use Packaged\Rwd\Country\Country;

class SYCountry implements Country
{
  public function getName()
  {
    return 'Syrian Arab Republic';
  }

  public function getIso2()
  {
    return 'SY';
  }

  public function getIso3()
  {
    return 'SYR';
  }

  public function getWmo()
  {
    return 'SY';
  }

  public function getNumericCode()
  {
    return 760;
  }

  public function getDialPrefix()
  {
    return 963;
  }

  public function getCurrencyCode()
  {
    return 'SYP';
  }
}
