<?php
namespace Packaged\Rwd\Country\Countries;

use Packaged\Rwd\Country\CountryInterface;

class LACountry implements CountryInterface
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
