<?php
namespace Packaged\Rwd\Country\Countries;

use Packaged\Rwd\Country\CountryInterface;

class HMCountry implements CountryInterface
{
  public function getName()
  {
    return 'Heard Island and McDonald Islands';
  }

  public function getIso2()
  {
    return 'HM';
  }

  public function getIso3()
  {
    return 'HMD';
  }

  public function getWmo()
  {
    return ' ';
  }

  public function getNumericCode()
  {
    return 334;
  }

  public function getDialPrefix()
  {
    return 672;
  }

  public function getCurrencyCode()
  {
    return 'AUD';
  }
}
