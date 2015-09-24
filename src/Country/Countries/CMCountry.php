<?php
namespace Fortifi\Rwd\Country\Countries;

use Fortifi\Rwd\Country\Country;

class CMCountry implements Country
{
  public function getName()
  {
    return 'Cameroon';
  }

  public function getIso2()
  {
    return 'CM';
  }

  public function getIso3()
  {
    return 'CMR';
  }

  public function getWmo()
  {
    return 'CM';
  }

  public function getNumericCode()
  {
    return 120;
  }

  public function getDialPrefix()
  {
    return 237;
  }

  public function getCurrencyCode()
  {
    return 'XAF';
  }
}
