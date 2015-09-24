<?php
namespace Fortifi\Rwd\Country\Countries;

use Fortifi\Rwd\Country\Country;

class NCCountry implements Country
{
  public function getName()
  {
    return 'New Caledonia';
  }

  public function getIso2()
  {
    return 'NC';
  }

  public function getIso3()
  {
    return 'NCL';
  }

  public function getWmo()
  {
    return 'NC';
  }

  public function getNumericCode()
  {
    return 540;
  }

  public function getDialPrefix()
  {
    return 687;
  }

  public function getCurrencyCode()
  {
    return 'XPF';
  }
}
