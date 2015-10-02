<?php
namespace Packaged\Rwd\Country\Countries;

use Packaged\Rwd\Country\Country;

class CRCountry implements Country
{
  public function getName()
  {
    return 'Costa Rica';
  }

  public function getIso2()
  {
    return 'CR';
  }

  public function getIso3()
  {
    return 'CRI';
  }

  public function getWmo()
  {
    return 'CS';
  }

  public function getNumericCode()
  {
    return 188;
  }

  public function getDialPrefix()
  {
    return 506;
  }

  public function getCurrencyCode()
  {
    return 'CRC';
  }
}
