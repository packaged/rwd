<?php
namespace Packaged\Rwd\Country\Countries;

use Packaged\Rwd\Country\CountryInterface;

class TOCountry implements CountryInterface
{
  public function getName()
  {
    return 'Tonga';
  }

  public function getIso2()
  {
    return 'TO';
  }

  public function getIso3()
  {
    return 'TON';
  }

  public function getWmo()
  {
    return 'TO';
  }

  public function getNumericCode()
  {
    return 776;
  }

  public function getDialPrefix()
  {
    return 676;
  }

  public function getCurrencyCode()
  {
    return 'TOP';
  }
}
