<?php
namespace Fortifi\Rwd\Country\Countries;

use Fortifi\Rwd\Country\Country;

class BOCountry implements Country
{
  public function getName()
  {
    return 'Bolivia, Plurinational State of';
  }

  public function getIso2()
  {
    return 'BO';
  }

  public function getIso3()
  {
    return 'BOL';
  }

  public function getWmo()
  {
    return 'BO';
  }

  public function getNumericCode()
  {
    return 68;
  }

  public function getDialPrefix()
  {
    return 591;
  }

  public function getCurrencyCode()
  {
    return 'BOB';
  }
}
