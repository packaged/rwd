<?php
namespace Packaged\Rwd\Country\Countries;

use Packaged\Rwd\Country\Country;

class HMCountry implements Country
{
  public function getName()
  {
    return 'Heard Island and McDonald Islands';
  }

  public function getIso2()
  {
    return 'HM';
  }

  public function getIso3()
  {
    return 'HMD';
  }

  public function getWmo()
  {
    return ' ';
  }

  public function getNumericCode()
  {
    return 334;
  }

  public function getDialPrefix()
  {
    return 672;
  }

  public function getCurrencyCode()
  {
    return 'AUD';
  }
}
