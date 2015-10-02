<?php
namespace Packaged\Rwd\Country\Countries;

use Packaged\Rwd\Country\Country;

class SBCountry implements Country
{
  public function getName()
  {
    return 'Solomon Islands';
  }

  public function getIso2()
  {
    return 'SB';
  }

  public function getIso3()
  {
    return 'SLB';
  }

  public function getWmo()
  {
    return 'SO';
  }

  public function getNumericCode()
  {
    return 90;
  }

  public function getDialPrefix()
  {
    return 677;
  }

  public function getCurrencyCode()
  {
    return 'SBD';
  }
}
