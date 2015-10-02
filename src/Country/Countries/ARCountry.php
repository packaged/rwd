<?php
namespace Packaged\Rwd\Country\Countries;

use Packaged\Rwd\Country\CountryInterface;

class ARCountry implements CountryInterface
{
  public function getName()
  {
    return 'Argentina';
  }

  public function getIso2()
  {
    return 'AR';
  }

  public function getIso3()
  {
    return 'ARG';
  }

  public function getWmo()
  {
    return 'AG';
  }

  public function getNumericCode()
  {
    return 32;
  }

  public function getDialPrefix()
  {
    return 54;
  }

  public function getCurrencyCode()
  {
    return 'ARS';
  }
}
