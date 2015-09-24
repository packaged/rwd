<?php
namespace Fortifi\Rwd\Country\Countries;

use Fortifi\Rwd\Country\Country;

class LACountry implements Country
{
  public function getName()
  {
    return 'Lao People\'s Democratic Republic';
  }

  public function getIso2()
  {
    return 'LA';
  }

  public function getIso3()
  {
    return 'LAO';
  }

  public function getWmo()
  {
    return 'LA';
  }

  public function getNumericCode()
  {
    return 418;
  }

  public function getDialPrefix()
  {
    return 856;
  }

  public function getCurrencyCode()
  {
    return 'LAK';
  }
}
