<?php
namespace Packaged\Rwd\Country\Countries;

use Packaged\Rwd\Country\Country;

class BYCountry implements Country
{
  public function getName()
  {
    return 'Belarus';
  }

  public function getIso2()
  {
    return 'BY';
  }

  public function getIso3()
  {
    return 'BLR';
  }

  public function getWmo()
  {
    return 'BY';
  }

  public function getNumericCode()
  {
    return 112;
  }

  public function getDialPrefix()
  {
    return 375;
  }

  public function getCurrencyCode()
  {
    return 'BYR';
  }
}
