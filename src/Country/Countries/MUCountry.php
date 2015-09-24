<?php
namespace Fortifi\Rwd\Country\Countries;

use Fortifi\Rwd\Country\Country;

class MUCountry implements Country
{
  public function getName()
  {
    return 'Mauritius';
  }

  public function getIso2()
  {
    return 'MU';
  }

  public function getIso3()
  {
    return 'MUS';
  }

  public function getWmo()
  {
    return 'MA';
  }

  public function getNumericCode()
  {
    return 480;
  }

  public function getDialPrefix()
  {
    return 230;
  }

  public function getCurrencyCode()
  {
    return 'MUR';
  }
}
