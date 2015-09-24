<?php
namespace Fortifi\Rwd\Country\Countries;

use Fortifi\Rwd\Country\Country;

class MGCountry implements Country
{
  public function getName()
  {
    return 'Madagascar';
  }

  public function getIso2()
  {
    return 'MG';
  }

  public function getIso3()
  {
    return 'MDG';
  }

  public function getWmo()
  {
    return 'MG';
  }

  public function getNumericCode()
  {
    return 450;
  }

  public function getDialPrefix()
  {
    return 261;
  }

  public function getCurrencyCode()
  {
    return 'MGA';
  }
}
