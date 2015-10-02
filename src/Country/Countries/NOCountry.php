<?php
namespace Packaged\Rwd\Country\Countries;

use Packaged\Rwd\Country\CountryInterface;

class NOCountry implements CountryInterface
{
  public function getName()
  {
    return 'Norway';
  }

  public function getIso2()
  {
    return 'NO';
  }

  public function getIso3()
  {
    return 'NOR';
  }

  public function getWmo()
  {
    return 'NO';
  }

  public function getNumericCode()
  {
    return 578;
  }

  public function getDialPrefix()
  {
    return 47;
  }

  public function getCurrencyCode()
  {
    return 'NOK';
  }
}
