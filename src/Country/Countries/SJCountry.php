<?php
namespace Fortifi\Rwd\Country\Countries;

use Fortifi\Rwd\Country\Country;

class SJCountry implements Country
{
  public function getName()
  {
    return 'Svalbard and Jan Mayen';
  }

  public function getIso2()
  {
    return 'SJ';
  }

  public function getIso3()
  {
    return 'SJM';
  }

  public function getWmo()
  {
    return 'SZ';
  }

  public function getNumericCode()
  {
    return 744;
  }

  public function getDialPrefix()
  {
    return 47;
  }

  public function getCurrencyCode()
  {
    return 'NOK';
  }
}
