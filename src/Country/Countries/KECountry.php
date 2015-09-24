<?php
namespace Fortifi\Rwd\Country\Countries;

use Fortifi\Rwd\Country\Country;

class KECountry implements Country
{
  public function getName()
  {
    return 'Kenya';
  }

  public function getIso2()
  {
    return 'KE';
  }

  public function getIso3()
  {
    return 'KEN';
  }

  public function getWmo()
  {
    return 'KN';
  }

  public function getNumericCode()
  {
    return 404;
  }

  public function getDialPrefix()
  {
    return 254;
  }

  public function getCurrencyCode()
  {
    return 'KES';
  }
}
