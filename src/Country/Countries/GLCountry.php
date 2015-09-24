<?php
namespace Fortifi\Rwd\Country\Countries;

use Fortifi\Rwd\Country\Country;

class GLCountry implements Country
{
  public function getName()
  {
    return 'Greenland';
  }

  public function getIso2()
  {
    return 'GL';
  }

  public function getIso3()
  {
    return 'GRL';
  }

  public function getWmo()
  {
    return 'GL';
  }

  public function getNumericCode()
  {
    return 304;
  }

  public function getDialPrefix()
  {
    return 299;
  }

  public function getCurrencyCode()
  {
    return 'DKK';
  }
}
