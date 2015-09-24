<?php
namespace Fortifi\Rwd\Country\Countries;

use Fortifi\Rwd\Country\Country;

class YECountry implements Country
{
  public function getName()
  {
    return 'Yemen';
  }

  public function getIso2()
  {
    return 'YE';
  }

  public function getIso3()
  {
    return 'YEM';
  }

  public function getWmo()
  {
    return 'YE';
  }

  public function getNumericCode()
  {
    return 887;
  }

  public function getDialPrefix()
  {
    return 967;
  }

  public function getCurrencyCode()
  {
    return 'YER';
  }
}
