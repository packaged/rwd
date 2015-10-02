<?php
namespace Packaged\Rwd\Country\Countries;

use Packaged\Rwd\Country\Country;

class IECountry implements Country
{
  public function getName()
  {
    return 'Ireland';
  }

  public function getIso2()
  {
    return 'IE';
  }

  public function getIso3()
  {
    return 'IRL';
  }

  public function getWmo()
  {
    return 'IE';
  }

  public function getNumericCode()
  {
    return 372;
  }

  public function getDialPrefix()
  {
    return 353;
  }

  public function getCurrencyCode()
  {
    return 'EUR';
  }
}
