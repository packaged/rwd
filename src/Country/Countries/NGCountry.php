<?php
namespace Packaged\Rwd\Country\Countries;

use Packaged\Rwd\Country\Country;

class NGCountry implements Country
{
  public function getName()
  {
    return 'Nigeria';
  }

  public function getIso2()
  {
    return 'NG';
  }

  public function getIso3()
  {
    return 'NGA';
  }

  public function getWmo()
  {
    return 'NI';
  }

  public function getNumericCode()
  {
    return 566;
  }

  public function getDialPrefix()
  {
    return 234;
  }

  public function getCurrencyCode()
  {
    return 'NGN';
  }
}
