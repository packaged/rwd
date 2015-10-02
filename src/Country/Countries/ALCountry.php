<?php
namespace Packaged\Rwd\Country\Countries;

use Packaged\Rwd\Country\CountryInterface;

class ALCountry implements CountryInterface
{
  public function getName()
  {
    return 'Albania';
  }

  public function getIso2()
  {
    return 'AL';
  }

  public function getIso3()
  {
    return 'ALB';
  }

  public function getWmo()
  {
    return 'AB';
  }

  public function getNumericCode()
  {
    return 8;
  }

  public function getDialPrefix()
  {
    return 355;
  }

  public function getCurrencyCode()
  {
    return 'ALL';
  }
}
