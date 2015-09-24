<?php
namespace Fortifi\Rwd\Country\Countries;

use Fortifi\Rwd\Country\Country;

class TVCountry implements Country
{
  public function getName()
  {
    return 'Tuvalu';
  }

  public function getIso2()
  {
    return 'TV';
  }

  public function getIso3()
  {
    return 'TUV';
  }

  public function getWmo()
  {
    return 'TV';
  }

  public function getNumericCode()
  {
    return 798;
  }

  public function getDialPrefix()
  {
    return 688;
  }

  public function getCurrencyCode()
  {
    return 'AUD';
  }
}
