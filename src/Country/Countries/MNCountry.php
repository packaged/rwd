<?php
namespace Packaged\Rwd\Country\Countries;

use Packaged\Rwd\Country\Country;

class MNCountry implements Country
{
  public function getName()
  {
    return 'Mongolia';
  }

  public function getIso2()
  {
    return 'MN';
  }

  public function getIso3()
  {
    return 'MNG';
  }

  public function getWmo()
  {
    return 'MO';
  }

  public function getNumericCode()
  {
    return 496;
  }

  public function getDialPrefix()
  {
    return 976;
  }

  public function getCurrencyCode()
  {
    return 'MNT';
  }
}
