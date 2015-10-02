<?php
namespace Packaged\Rwd\Country\Countries;

use Packaged\Rwd\Country\Country;

class DJCountry implements Country
{
  public function getName()
  {
    return 'Djibouti';
  }

  public function getIso2()
  {
    return 'DJ';
  }

  public function getIso3()
  {
    return 'DJI';
  }

  public function getWmo()
  {
    return 'DJ';
  }

  public function getNumericCode()
  {
    return 262;
  }

  public function getDialPrefix()
  {
    return 253;
  }

  public function getCurrencyCode()
  {
    return 'DJF';
  }
}
