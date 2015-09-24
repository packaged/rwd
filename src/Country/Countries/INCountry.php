<?php
namespace Fortifi\Rwd\Country\Countries;

use Fortifi\Rwd\Country\Country;

class INCountry implements Country
{
  public function getName()
  {
    return 'India';
  }

  public function getIso2()
  {
    return 'IN';
  }

  public function getIso3()
  {
    return 'IND';
  }

  public function getWmo()
  {
    return 'IN';
  }

  public function getNumericCode()
  {
    return 356;
  }

  public function getDialPrefix()
  {
    return 91;
  }

  public function getCurrencyCode()
  {
    return 'INR';
  }
}
