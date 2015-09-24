<?php
namespace Fortifi\Rwd\Country\Countries;

use Fortifi\Rwd\Country\Country;

class AMCountry implements Country
{
  public function getName()
  {
    return 'Armenia';
  }

  public function getIso2()
  {
    return 'AM';
  }

  public function getIso3()
  {
    return 'ARM';
  }

  public function getWmo()
  {
    return 'AY';
  }

  public function getNumericCode()
  {
    return 51;
  }

  public function getDialPrefix()
  {
    return 374;
  }

  public function getCurrencyCode()
  {
    return 'AMD';
  }
}
