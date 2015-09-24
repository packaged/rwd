<?php
namespace Fortifi\Rwd\Country\Countries;

use Fortifi\Rwd\Country\Country;

class SHCountry implements Country
{
  public function getName()
  {
    return 'Saint Helena, Ascension and Tristan da Cunha';
  }

  public function getIso2()
  {
    return 'SH';
  }

  public function getIso3()
  {
    return 'SHN';
  }

  public function getWmo()
  {
    return 'HE';
  }

  public function getNumericCode()
  {
    return 654;
  }

  public function getDialPrefix()
  {
    return 290;
  }

  public function getCurrencyCode()
  {
    return 'SHP';
  }
}
