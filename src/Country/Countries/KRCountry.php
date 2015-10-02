<?php
namespace Packaged\Rwd\Country\Countries;

use Packaged\Rwd\Country\CountryInterface;

class KRCountry implements CountryInterface
{
  public function getName()
  {
    return 'Korea, Republic of';
  }

  public function getIso2()
  {
    return 'KR';
  }

  public function getIso3()
  {
    return 'KOR';
  }

  public function getWmo()
  {
    return 'KO';
  }

  public function getNumericCode()
  {
    return 410;
  }

  public function getDialPrefix()
  {
    return 82;
  }

  public function getCurrencyCode()
  {
    return 'KRW';
  }
}
