<?php
namespace Packaged\Rwd\Country\Countries;

use Packaged\Rwd\Country\Country;

class TGCountry implements Country
{
  public function getName()
  {
    return 'Togo';
  }

  public function getIso2()
  {
    return 'TG';
  }

  public function getIso3()
  {
    return 'TGO';
  }

  public function getWmo()
  {
    return 'TG';
  }

  public function getNumericCode()
  {
    return 768;
  }

  public function getDialPrefix()
  {
    return 228;
  }

  public function getCurrencyCode()
  {
    return 'XOF';
  }
}
