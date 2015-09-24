<?php
namespace Fortifi\Rwd\Country\Countries;

use Fortifi\Rwd\Country\Country;

class AWCountry implements Country
{
  public function getName()
  {
    return 'Aruba';
  }

  public function getIso2()
  {
    return 'AW';
  }

  public function getIso3()
  {
    return 'ABW';
  }

  public function getWmo()
  {
    return 'NU';
  }

  public function getNumericCode()
  {
    return 533;
  }

  public function getDialPrefix()
  {
    return 297;
  }

  public function getCurrencyCode()
  {
    return 'AWG';
  }
}
