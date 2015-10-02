<?php
namespace Packaged\Rwd\Country\Countries;

use Packaged\Rwd\Country\Country;

class DZCountry implements Country
{
  public function getName()
  {
    return 'Algeria';
  }

  public function getIso2()
  {
    return 'DZ';
  }

  public function getIso3()
  {
    return 'DZA';
  }

  public function getWmo()
  {
    return 'AL';
  }

  public function getNumericCode()
  {
    return 12;
  }

  public function getDialPrefix()
  {
    return 213;
  }

  public function getCurrencyCode()
  {
    return 'DZD';
  }
}
