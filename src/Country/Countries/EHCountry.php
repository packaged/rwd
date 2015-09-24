<?php
namespace Fortifi\Rwd\Country\Countries;

use Fortifi\Rwd\Country\Country;

class EHCountry implements Country
{
  public function getName()
  {
    return 'Western Sahara';
  }

  public function getIso2()
  {
    return 'EH';
  }

  public function getIso3()
  {
    return 'ESH';
  }

  public function getWmo()
  {
    return ' ';
  }

  public function getNumericCode()
  {
    return 732;
  }

  public function getDialPrefix()
  {
    return 212;
  }

  public function getCurrencyCode()
  {
    return 'MAD';
  }
}
