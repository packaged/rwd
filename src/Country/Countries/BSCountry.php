<?php
namespace Packaged\Rwd\Country\Countries;

use Packaged\Rwd\Country\Country;

class BSCountry implements Country
{
  public function getName()
  {
    return 'Bahamas';
  }

  public function getIso2()
  {
    return 'BS';
  }

  public function getIso3()
  {
    return 'BHS';
  }

  public function getWmo()
  {
    return 'BA';
  }

  public function getNumericCode()
  {
    return 44;
  }

  public function getDialPrefix()
  {
    return 1;
  }

  public function getCurrencyCode()
  {
    return 'BSD';
  }
}
