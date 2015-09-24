<?php
namespace Fortifi\Rwd\Country\Countries;

use Fortifi\Rwd\Country\Country;

class ESCountry implements Country
{
  public function getName()
  {
    return 'Spain';
  }

  public function getIso2()
  {
    return 'ES';
  }

  public function getIso3()
  {
    return 'ESP';
  }

  public function getWmo()
  {
    return 'SP';
  }

  public function getNumericCode()
  {
    return 724;
  }

  public function getDialPrefix()
  {
    return 34;
  }

  public function getCurrencyCode()
  {
    return 'EUR';
  }
}
