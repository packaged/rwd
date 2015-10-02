<?php
namespace Packaged\Rwd\Country\Countries;

use Packaged\Rwd\Country\Country;

class AQCountry implements Country
{
  public function getName()
  {
    return 'Antarctica';
  }

  public function getIso2()
  {
    return 'AQ';
  }

  public function getIso3()
  {
    return 'ATA';
  }

  public function getWmo()
  {
    return 'AA';
  }

  public function getNumericCode()
  {
    return 10;
  }

  public function getDialPrefix()
  {
    return 672;
  }

  public function getCurrencyCode()
  {
    return '';
  }
}
