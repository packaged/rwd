<?php
namespace Packaged\Rwd\Country\Countries;

use Packaged\Rwd\Country\Country;

class SGCountry implements Country
{
  public function getName()
  {
    return 'Singapore';
  }

  public function getIso2()
  {
    return 'SG';
  }

  public function getIso3()
  {
    return 'SGP';
  }

  public function getWmo()
  {
    return 'SR';
  }

  public function getNumericCode()
  {
    return 702;
  }

  public function getDialPrefix()
  {
    return 65;
  }

  public function getCurrencyCode()
  {
    return 'SGD';
  }
}
