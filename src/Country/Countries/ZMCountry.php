<?php
namespace Packaged\Rwd\Country\Countries;

use Packaged\Rwd\Country\CountryInterface;

class ZMCountry implements CountryInterface
{
  public function getName()
  {
    return 'Zambia';
  }

  public function getIso2()
  {
    return 'ZM';
  }

  public function getIso3()
  {
    return 'ZMB';
  }

  public function getWmo()
  {
    return 'ZB';
  }

  public function getNumericCode()
  {
    return 894;
  }

  public function getDialPrefix()
  {
    return 260;
  }

  public function getCurrencyCode()
  {
    return 'ZMW';
  }
}
