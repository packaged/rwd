<?php
namespace Packaged\Rwd\Country\Countries;

use Packaged\Rwd\Country\Country;

class FKCountry implements Country
{
  public function getName()
  {
    return 'Falkland Islands (Malvinas)';
  }

  public function getIso2()
  {
    return 'FK';
  }

  public function getIso3()
  {
    return 'FLK';
  }

  public function getWmo()
  {
    return 'FK';
  }

  public function getNumericCode()
  {
    return 238;
  }

  public function getDialPrefix()
  {
    return 500;
  }

  public function getCurrencyCode()
  {
    return 'FKP';
  }
}
