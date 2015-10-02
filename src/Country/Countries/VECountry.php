<?php
namespace Packaged\Rwd\Country\Countries;

use Packaged\Rwd\Country\Country;

class VECountry implements Country
{
  public function getName()
  {
    return 'Venezuela, Bolivarian Republic of';
  }

  public function getIso2()
  {
    return 'VE';
  }

  public function getIso3()
  {
    return 'VEN';
  }

  public function getWmo()
  {
    return 'VN';
  }

  public function getNumericCode()
  {
    return 862;
  }

  public function getDialPrefix()
  {
    return 58;
  }

  public function getCurrencyCode()
  {
    return 'VEF';
  }
}
