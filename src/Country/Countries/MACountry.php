<?php
namespace Fortifi\Rwd\Country\Countries;

use Fortifi\Rwd\Country\Country;

class MACountry implements Country
{
  public function getName()
  {
    return 'Morocco';
  }

  public function getIso2()
  {
    return 'MA';
  }

  public function getIso3()
  {
    return 'MAR';
  }

  public function getWmo()
  {
    return 'MC';
  }

  public function getNumericCode()
  {
    return 504;
  }

  public function getDialPrefix()
  {
    return 212;
  }

  public function getCurrencyCode()
  {
    return 'MAD';
  }
}
