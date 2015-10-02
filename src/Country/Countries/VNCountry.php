<?php
namespace Packaged\Rwd\Country\Countries;

use Packaged\Rwd\Country\Country;

class VNCountry implements Country
{
  public function getName()
  {
    return 'Viet Nam';
  }

  public function getIso2()
  {
    return 'VN';
  }

  public function getIso3()
  {
    return 'VNM';
  }

  public function getWmo()
  {
    return 'VS';
  }

  public function getNumericCode()
  {
    return 704;
  }

  public function getDialPrefix()
  {
    return 84;
  }

  public function getCurrencyCode()
  {
    return 'VND';
  }
}
