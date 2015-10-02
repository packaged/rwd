<?php
namespace Packaged\Rwd\Country\Countries;

use Packaged\Rwd\Country\CountryInterface;

class CVCountry implements CountryInterface
{
  public function getName()
  {
    return 'Cape Verde';
  }

  public function getIso2()
  {
    return 'CV';
  }

  public function getIso3()
  {
    return 'CPV';
  }

  public function getWmo()
  {
    return 'CV';
  }

  public function getNumericCode()
  {
    return 132;
  }

  public function getDialPrefix()
  {
    return 238;
  }

  public function getCurrencyCode()
  {
    return 'CVE';
  }
}
