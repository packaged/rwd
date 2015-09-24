<?php
namespace Fortifi\Rwd\Country\Countries;

use Fortifi\Rwd\Country\Country;

class MQCountry implements Country
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
