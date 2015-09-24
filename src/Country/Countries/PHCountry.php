<?php
namespace Fortifi\Rwd\Country\Countries;

use Fortifi\Rwd\Country\Country;

class PHCountry implements Country
{
  public function getName()
  {
    return 'Philippines';
  }

  public function getIso2()
  {
    return 'PH';
  }

  public function getIso3()
  {
    return 'PHL';
  }

  public function getWmo()
  {
    return 'PH';
  }

  public function getNumericCode()
  {
    return 608;
  }

  public function getDialPrefix()
  {
    return 63;
  }

  public function getCurrencyCode()
  {
    return 'PHP';
  }
}
