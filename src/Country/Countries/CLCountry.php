<?php
namespace Fortifi\Rwd\Country\Countries;

use Fortifi\Rwd\Country\Country;

class CLCountry implements Country
{
  public function getName()
  {
    return 'Chile';
  }

  public function getIso2()
  {
    return 'CL';
  }

  public function getIso3()
  {
    return 'CHL';
  }

  public function getWmo()
  {
    return 'CH';
  }

  public function getNumericCode()
  {
    return 152;
  }

  public function getDialPrefix()
  {
    return 56;
  }

  public function getCurrencyCode()
  {
    return 'CLP';
  }
}
