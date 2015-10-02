<?php
namespace Packaged\Rwd\Country\Countries;

use Packaged\Rwd\Country\Country;

class DKCountry implements Country
{
  public function getName()
  {
    return 'Denmark';
  }

  public function getIso2()
  {
    return 'DK';
  }

  public function getIso3()
  {
    return 'DNK';
  }

  public function getWmo()
  {
    return 'DN';
  }

  public function getNumericCode()
  {
    return 208;
  }

  public function getDialPrefix()
  {
    return 45;
  }

  public function getCurrencyCode()
  {
    return 'DKK';
  }
}
