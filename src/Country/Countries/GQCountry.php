<?php
namespace Fortifi\Rwd\Country\Countries;

use Fortifi\Rwd\Country\Country;

class GQCountry implements Country
{
  public function getName()
  {
    return 'Equatorial Guinea';
  }

  public function getIso2()
  {
    return 'GQ';
  }

  public function getIso3()
  {
    return 'GNQ';
  }

  public function getWmo()
  {
    return 'GQ';
  }

  public function getNumericCode()
  {
    return 226;
  }

  public function getDialPrefix()
  {
    return 240;
  }

  public function getCurrencyCode()
  {
    return 'XAF';
  }
}
