<?php
namespace Packaged\Rwd\Country\Countries;

use Packaged\Rwd\Country\Country;

class CKCountry implements Country
{
  public function getName()
  {
    return 'Cook Islands';
  }

  public function getIso2()
  {
    return 'CK';
  }

  public function getIso3()
  {
    return 'COK';
  }

  public function getWmo()
  {
    return 'KU';
  }

  public function getNumericCode()
  {
    return 184;
  }

  public function getDialPrefix()
  {
    return 682;
  }

  public function getCurrencyCode()
  {
    return 'NZD';
  }
}
