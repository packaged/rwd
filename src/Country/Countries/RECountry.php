<?php
namespace Packaged\Rwd\Country\Countries;

use Packaged\Rwd\Country\CountryInterface;

class RECountry implements CountryInterface
{
  public function getName()
  {
    return 'Réunion';
  }

  public function getIso2()
  {
    return 'RE';
  }

  public function getIso3()
  {
    return 'REU';
  }

  public function getWmo()
  {
    return 'RE';
  }

  public function getNumericCode()
  {
    return 638;
  }

  public function getDialPrefix()
  {
    return 262;
  }

  public function getCurrencyCode()
  {
    return 'EUR';
  }
}
