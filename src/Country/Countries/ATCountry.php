<?php
namespace Packaged\Rwd\Country\Countries;

use Packaged\Rwd\Country\Country;

class ATCountry implements Country
{
  public function getName()
  {
    return 'Austria';
  }

  public function getIso2()
  {
    return 'AT';
  }

  public function getIso3()
  {
    return 'AUT';
  }

  public function getWmo()
  {
    return 'OS';
  }

  public function getNumericCode()
  {
    return 40;
  }

  public function getDialPrefix()
  {
    return 43;
  }

  public function getCurrencyCode()
  {
    return 'EUR';
  }
}
