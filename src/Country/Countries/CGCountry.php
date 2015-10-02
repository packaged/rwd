<?php
namespace Packaged\Rwd\Country\Countries;

use Packaged\Rwd\Country\Country;

class CGCountry implements Country
{
  public function getName()
  {
    return 'Congo';
  }

  public function getIso2()
  {
    return 'CG';
  }

  public function getIso3()
  {
    return 'COG';
  }

  public function getWmo()
  {
    return 'CG';
  }

  public function getNumericCode()
  {
    return 178;
  }

  public function getDialPrefix()
  {
    return 242;
  }

  public function getCurrencyCode()
  {
    return 'XAF';
  }
}
