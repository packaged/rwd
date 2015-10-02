<?php
namespace Packaged\Rwd\Country\Countries;

use Packaged\Rwd\Country\Country;

class RWCountry implements Country
{
  public function getName()
  {
    return 'Rwanda';
  }

  public function getIso2()
  {
    return 'RW';
  }

  public function getIso3()
  {
    return 'RWA';
  }

  public function getWmo()
  {
    return 'RW';
  }

  public function getNumericCode()
  {
    return 646;
  }

  public function getDialPrefix()
  {
    return 250;
  }

  public function getCurrencyCode()
  {
    return 'RWF';
  }
}
