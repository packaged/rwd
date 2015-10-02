<?php
namespace Packaged\Rwd\Country\Countries;

use Packaged\Rwd\Country\Country;

class EGCountry implements Country
{
  public function getName()
  {
    return 'Egypt';
  }

  public function getIso2()
  {
    return 'EG';
  }

  public function getIso3()
  {
    return 'EGY';
  }

  public function getWmo()
  {
    return 'EG';
  }

  public function getNumericCode()
  {
    return 818;
  }

  public function getDialPrefix()
  {
    return 20;
  }

  public function getCurrencyCode()
  {
    return 'EGP';
  }
}
