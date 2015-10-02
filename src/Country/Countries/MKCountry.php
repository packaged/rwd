<?php
namespace Packaged\Rwd\Country\Countries;

use Packaged\Rwd\Country\Country;

class MKCountry implements Country
{
  public function getName()
  {
    return 'Macedonia, the Former Yugoslav Republic of';
  }

  public function getIso2()
  {
    return 'MK';
  }

  public function getIso3()
  {
    return 'MKD';
  }

  public function getWmo()
  {
    return 'MJ';
  }

  public function getNumericCode()
  {
    return 807;
  }

  public function getDialPrefix()
  {
    return 389;
  }

  public function getCurrencyCode()
  {
    return 'MKD';
  }
}
