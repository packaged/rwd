<?php
namespace Packaged\Rwd\Country\Countries;

use Packaged\Rwd\Country\Country;

class BACountry implements Country
{
  public function getName()
  {
    return 'Bosnia and Herzegovina';
  }

  public function getIso2()
  {
    return 'BA';
  }

  public function getIso3()
  {
    return 'BIH';
  }

  public function getWmo()
  {
    return 'BG';
  }

  public function getNumericCode()
  {
    return 70;
  }

  public function getDialPrefix()
  {
    return 387;
  }

  public function getCurrencyCode()
  {
    return 'BAM';
  }
}
