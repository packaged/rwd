<?php
namespace Fortifi\Rwd\Country\Countries;

use Fortifi\Rwd\Country\Country;

class BDCountry implements Country
{
  public function getName()
  {
    return 'Bangladesh';
  }

  public function getIso2()
  {
    return 'BD';
  }

  public function getIso3()
  {
    return 'BGD';
  }

  public function getWmo()
  {
    return 'BW';
  }

  public function getNumericCode()
  {
    return 50;
  }

  public function getDialPrefix()
  {
    return 880;
  }

  public function getCurrencyCode()
  {
    return 'BDT';
  }
}
