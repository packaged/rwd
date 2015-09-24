<?php
namespace Fortifi\Rwd\Country\Countries;

use Fortifi\Rwd\Country\Country;

class ZWCountry implements Country
{
  public function getName()
  {
    return 'Zimbabwe';
  }

  public function getIso2()
  {
    return 'ZW';
  }

  public function getIso3()
  {
    return 'ZWE';
  }

  public function getWmo()
  {
    return 'ZW';
  }

  public function getNumericCode()
  {
    return 716;
  }

  public function getDialPrefix()
  {
    return 263;
  }

  public function getCurrencyCode()
  {
    return 'ZWL';
  }
}
