<?php
namespace Packaged\Rwd\Country\Countries;

use Packaged\Rwd\Country\CountryInterface;

class MHCountry implements CountryInterface
{
  public function getName()
  {
    return 'Marshall Islands';
  }

  public function getIso2()
  {
    return 'MH';
  }

  public function getIso3()
  {
    return 'MHL';
  }

  public function getWmo()
  {
    return 'MH';
  }

  public function getNumericCode()
  {
    return 584;
  }

  public function getDialPrefix()
  {
    return 692;
  }

  public function getCurrencyCode()
  {
    return 'USD';
  }
}
