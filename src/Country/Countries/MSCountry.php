<?php
namespace Fortifi\Rwd\Country\Countries;

use Fortifi\Rwd\Country\Country;

class MSCountry implements Country
{
  public function getName()
  {
    return 'Montserrat';
  }

  public function getIso2()
  {
    return 'MS';
  }

  public function getIso3()
  {
    return 'MSR';
  }

  public function getWmo()
  {
    return ' ';
  }

  public function getNumericCode()
  {
    return 500;
  }

  public function getDialPrefix()
  {
    return 1;
  }

  public function getCurrencyCode()
  {
    return 'XCD';
  }
}
