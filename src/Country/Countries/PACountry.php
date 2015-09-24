<?php
namespace Fortifi\Rwd\Country\Countries;

use Fortifi\Rwd\Country\Country;

class PACountry implements Country
{
  public function getName()
  {
    return 'Panama';
  }

  public function getIso2()
  {
    return 'PA';
  }

  public function getIso3()
  {
    return 'PAN';
  }

  public function getWmo()
  {
    return 'PM';
  }

  public function getNumericCode()
  {
    return 591;
  }

  public function getDialPrefix()
  {
    return 507;
  }

  public function getCurrencyCode()
  {
    return 'USD';
  }
}
