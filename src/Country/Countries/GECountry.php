<?php
namespace Packaged\Rwd\Country\Countries;

use Packaged\Rwd\Country\Country;

class GECountry implements Country
{
  public function getName()
  {
    return 'Georgia';
  }

  public function getIso2()
  {
    return 'GE';
  }

  public function getIso3()
  {
    return 'GEO';
  }

  public function getWmo()
  {
    return 'GG';
  }

  public function getNumericCode()
  {
    return 268;
  }

  public function getDialPrefix()
  {
    return 995;
  }

  public function getCurrencyCode()
  {
    return 'GEL';
  }
}
