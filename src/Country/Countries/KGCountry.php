<?php
namespace Packaged\Rwd\Country\Countries;

use Packaged\Rwd\Country\CountryInterface;

class KGCountry implements CountryInterface
{
  public function getName()
  {
    return 'Kyrgyzstan';
  }

  public function getIso2()
  {
    return 'KG';
  }

  public function getIso3()
  {
    return 'KGZ';
  }

  public function getWmo()
  {
    return 'KG';
  }

  public function getNumericCode()
  {
    return 417;
  }

  public function getDialPrefix()
  {
    return 996;
  }

  public function getCurrencyCode()
  {
    return 'KGS';
  }
}
