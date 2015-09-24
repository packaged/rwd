<?php
namespace Fortifi\Rwd\Country\Countries;

use Fortifi\Rwd\Country\Country;

class NOCountry implements Country
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
