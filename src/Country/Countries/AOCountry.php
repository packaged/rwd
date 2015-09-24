<?php
namespace Fortifi\Rwd\Country\Countries;

use Fortifi\Rwd\Country\Country;

class AOCountry implements Country
{
  public function getName()
  {
    return 'Angola';
  }

  public function getIso2()
  {
    return 'AO';
  }

  public function getIso3()
  {
    return 'AGO';
  }

  public function getWmo()
  {
    return 'AN';
  }

  public function getNumericCode()
  {
    return 24;
  }

  public function getDialPrefix()
  {
    return 244;
  }

  public function getCurrencyCode()
  {
    return 'AOA';
  }
}
