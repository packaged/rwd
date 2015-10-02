<?php
namespace Packaged\Rwd\Country\Countries;

use Packaged\Rwd\Country\Country;

class CYCountry implements Country
{
  public function getName()
  {
    return 'Cyprus';
  }

  public function getIso2()
  {
    return 'CY';
  }

  public function getIso3()
  {
    return 'CYP';
  }

  public function getWmo()
  {
    return 'CY';
  }

  public function getNumericCode()
  {
    return 196;
  }

  public function getDialPrefix()
  {
    return 357;
  }

  public function getCurrencyCode()
  {
    return 'EUR';
  }
}
