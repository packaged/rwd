<?php
namespace Fortifi\Rwd\Country\Countries;

use Fortifi\Rwd\Country\Country;

class AGCountry implements Country
{
  public function getName()
  {
    return 'Antigua and Barbuda';
  }

  public function getIso2()
  {
    return 'AG';
  }

  public function getIso3()
  {
    return 'ATG';
  }

  public function getWmo()
  {
    return 'AT';
  }

  public function getNumericCode()
  {
    return 28;
  }

  public function getDialPrefix()
  {
    return 1;
  }

  public function getCurrencyCode()
  {
    return 'XCD';
  }
}
