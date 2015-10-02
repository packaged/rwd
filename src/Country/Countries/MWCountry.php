<?php
namespace Packaged\Rwd\Country\Countries;

use Packaged\Rwd\Country\Country;

class MWCountry implements Country
{
  public function getName()
  {
    return 'Malawi';
  }

  public function getIso2()
  {
    return 'MW';
  }

  public function getIso3()
  {
    return 'MWI';
  }

  public function getWmo()
  {
    return 'MW';
  }

  public function getNumericCode()
  {
    return 454;
  }

  public function getDialPrefix()
  {
    return 265;
  }

  public function getCurrencyCode()
  {
    return 'MWK';
  }
}
