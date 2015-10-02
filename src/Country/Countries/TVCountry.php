<?php
namespace Packaged\Rwd\Country\Countries;

use Packaged\Rwd\Country\CountryInterface;

class TVCountry implements CountryInterface
{
  public function getName()
  {
    return 'Tuvalu';
  }

  public function getIso2()
  {
    return 'TV';
  }

  public function getIso3()
  {
    return 'TUV';
  }

  public function getWmo()
  {
    return 'TV';
  }

  public function getNumericCode()
  {
    return 798;
  }

  public function getDialPrefix()
  {
    return 688;
  }

  public function getCurrencyCode()
  {
    return 'AUD';
  }
}
