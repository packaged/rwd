<?php
namespace Packaged\Rwd\Country\Countries;

use Packaged\Rwd\Country\Country;

class JOCountry implements Country
{
  public function getName()
  {
    return 'Jordan';
  }

  public function getIso2()
  {
    return 'JO';
  }

  public function getIso3()
  {
    return 'JOR';
  }

  public function getWmo()
  {
    return 'JD';
  }

  public function getNumericCode()
  {
    return 400;
  }

  public function getDialPrefix()
  {
    return 962;
  }

  public function getCurrencyCode()
  {
    return 'JOD';
  }
}
