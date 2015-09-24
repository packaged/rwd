<?php
namespace Fortifi\Rwd\Country\Countries;

use Fortifi\Rwd\Country\Country;

class SVCountry implements Country
{
  public function getName()
  {
    return 'El Salvador';
  }

  public function getIso2()
  {
    return 'SV';
  }

  public function getIso3()
  {
    return 'SLV';
  }

  public function getWmo()
  {
    return 'ES';
  }

  public function getNumericCode()
  {
    return 222;
  }

  public function getDialPrefix()
  {
    return 503;
  }

  public function getCurrencyCode()
  {
    return 'USD';
  }
}
