<?php
namespace Packaged\Rwd\Country\Countries;

use Packaged\Rwd\Country\Country;

class RSCountry implements Country
{
  public function getName()
  {
    return 'Serbia';
  }

  public function getIso2()
  {
    return 'RS';
  }

  public function getIso3()
  {
    return 'SRB';
  }

  public function getWmo()
  {
    return 'YG';
  }

  public function getNumericCode()
  {
    return 688;
  }

  public function getDialPrefix()
  {
    return 381;
  }

  public function getCurrencyCode()
  {
    return 'RSD';
  }
}
