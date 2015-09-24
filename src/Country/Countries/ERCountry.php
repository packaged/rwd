<?php
namespace Fortifi\Rwd\Country\Countries;

use Fortifi\Rwd\Country\Country;

class ERCountry implements Country
{
  public function getName()
  {
    return 'Eritrea';
  }

  public function getIso2()
  {
    return 'ER';
  }

  public function getIso3()
  {
    return 'ERI';
  }

  public function getWmo()
  {
    return ' ';
  }

  public function getNumericCode()
  {
    return 232;
  }

  public function getDialPrefix()
  {
    return 291;
  }

  public function getCurrencyCode()
  {
    return 'ERN';
  }
}
