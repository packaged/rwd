<?php
namespace Packaged\Rwd\Country\Countries;

use Packaged\Rwd\Country\Country;

class FOCountry implements Country
{
  public function getName()
  {
    return 'Faroe Islands';
  }

  public function getIso2()
  {
    return 'FO';
  }

  public function getIso3()
  {
    return 'FRO';
  }

  public function getWmo()
  {
    return 'FA';
  }

  public function getNumericCode()
  {
    return 234;
  }

  public function getDialPrefix()
  {
    return 298;
  }

  public function getCurrencyCode()
  {
    return 'DKK';
  }
}
