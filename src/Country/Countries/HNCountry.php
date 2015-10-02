<?php
namespace Packaged\Rwd\Country\Countries;

use Packaged\Rwd\Country\Country;

class HNCountry implements Country
{
  public function getName()
  {
    return 'Honduras';
  }

  public function getIso2()
  {
    return 'HN';
  }

  public function getIso3()
  {
    return 'HND';
  }

  public function getWmo()
  {
    return 'HO';
  }

  public function getNumericCode()
  {
    return 340;
  }

  public function getDialPrefix()
  {
    return 504;
  }

  public function getCurrencyCode()
  {
    return 'HNL';
  }
}
