<?php
namespace Packaged\Rwd\Country\Countries;

use Packaged\Rwd\Country\CountryInterface;

class INCountry implements CountryInterface
{
  public function getName()
  {
    return 'India';
  }

  public function getIso2()
  {
    return 'IN';
  }

  public function getIso3()
  {
    return 'IND';
  }

  public function getWmo()
  {
    return 'IN';
  }

  public function getNumericCode()
  {
    return 356;
  }

  public function getDialPrefix()
  {
    return 91;
  }

  public function getCurrencyCode()
  {
    return 'INR';
  }
}
