<?php
namespace Packaged\Rwd\Country\Countries;

use Packaged\Rwd\Country\CountryInterface;

class BBCountry implements CountryInterface
{
  public function getName()
  {
    return 'Barbados';
  }

  public function getIso2()
  {
    return 'BB';
  }

  public function getIso3()
  {
    return 'BRB';
  }

  public function getWmo()
  {
    return 'BR';
  }

  public function getNumericCode()
  {
    return 52;
  }

  public function getDialPrefix()
  {
    return 1;
  }

  public function getCurrencyCode()
  {
    return 'BBD';
  }
}
