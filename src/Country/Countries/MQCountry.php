<?php
namespace Packaged\Rwd\Country\Countries;

use Packaged\Rwd\Country\CountryInterface;

class MQCountry implements CountryInterface
{
  public function getName()
  {
    return 'Martinique';
  }

  public function getIso2()
  {
    return 'MQ';
  }

  public function getIso3()
  {
    return 'MTQ';
  }

  public function getWmo()
  {
    return 'MR';
  }

  public function getNumericCode()
  {
    return 474;
  }

  public function getDialPrefix()
  {
    return 596;
  }

  public function getCurrencyCode()
  {
    return 'EUR';
  }
}
