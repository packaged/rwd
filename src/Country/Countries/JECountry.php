<?php
namespace Fortifi\Rwd\Country\Countries;

use Fortifi\Rwd\Country\Country;

class JECountry implements Country
{
  public function getName()
  {
    return 'Jersey';
  }

  public function getIso2()
  {
    return 'JE';
  }

  public function getIso3()
  {
    return 'JEY';
  }

  public function getWmo()
  {
    return ' ';
  }

  public function getNumericCode()
  {
    return 832;
  }

  public function getDialPrefix()
  {
    return 44;
  }

  public function getCurrencyCode()
  {
    return 'GBP';
  }
}
