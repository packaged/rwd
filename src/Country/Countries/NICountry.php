<?php
namespace Packaged\Rwd\Country\Countries;

use Packaged\Rwd\Country\CountryInterface;

class NICountry implements CountryInterface
{
  public function getName()
  {
    return 'Nicaragua';
  }

  public function getIso2()
  {
    return 'NI';
  }

  public function getIso3()
  {
    return 'NIC';
  }

  public function getWmo()
  {
    return 'NK';
  }

  public function getNumericCode()
  {
    return 558;
  }

  public function getDialPrefix()
  {
    return 505;
  }

  public function getCurrencyCode()
  {
    return 'NIO';
  }
}
