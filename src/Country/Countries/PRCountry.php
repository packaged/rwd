<?php
namespace Packaged\Rwd\Country\Countries;

use Packaged\Rwd\Country\Country;

class PRCountry implements Country
{
  public function getName()
  {
    return 'Puerto Rico';
  }

  public function getIso2()
  {
    return 'PR';
  }

  public function getIso3()
  {
    return 'PRI';
  }

  public function getWmo()
  {
    return 'PU';
  }

  public function getNumericCode()
  {
    return 630;
  }

  public function getDialPrefix()
  {
    return 1;
  }

  public function getCurrencyCode()
  {
    return 'USD';
  }
}
