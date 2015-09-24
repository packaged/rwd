<?php
namespace Fortifi\Rwd\Country\Countries;

use Fortifi\Rwd\Country\Country;

class LTCountry implements Country
{
  public function getName()
  {
    return 'Lithuania';
  }

  public function getIso2()
  {
    return 'LT';
  }

  public function getIso3()
  {
    return 'LTU';
  }

  public function getWmo()
  {
    return 'LT';
  }

  public function getNumericCode()
  {
    return 440;
  }

  public function getDialPrefix()
  {
    return 370;
  }

  public function getCurrencyCode()
  {
    return 'EUR';
  }
}
