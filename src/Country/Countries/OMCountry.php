<?php
namespace Packaged\Rwd\Country\Countries;

use Packaged\Rwd\Country\Country;

class OMCountry implements Country
{
  public function getName()
  {
    return 'Oman';
  }

  public function getIso2()
  {
    return 'OM';
  }

  public function getIso3()
  {
    return 'OMN';
  }

  public function getWmo()
  {
    return 'OM';
  }

  public function getNumericCode()
  {
    return 512;
  }

  public function getDialPrefix()
  {
    return 968;
  }

  public function getCurrencyCode()
  {
    return 'OMR';
  }
}
