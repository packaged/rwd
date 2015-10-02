<?php
namespace Packaged\Rwd\Country\Countries;

use Packaged\Rwd\Country\Country;

class BZCountry implements Country
{
  public function getName()
  {
    return 'Belize';
  }

  public function getIso2()
  {
    return 'BZ';
  }

  public function getIso3()
  {
    return 'BLZ';
  }

  public function getWmo()
  {
    return 'BH';
  }

  public function getNumericCode()
  {
    return 84;
  }

  public function getDialPrefix()
  {
    return 501;
  }

  public function getCurrencyCode()
  {
    return 'BZD';
  }
}
