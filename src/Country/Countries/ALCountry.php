<?php
namespace Fortifi\Rwd\Country\Countries;

use Fortifi\Rwd\Country\Country;

class ALCountry implements Country
{
  public function getName()
  {
    return 'Albania';
  }

  public function getIso2()
  {
    return 'AL';
  }

  public function getIso3()
  {
    return 'ALB';
  }

  public function getWmo()
  {
    return 'AB';
  }

  public function getNumericCode()
  {
    return 8;
  }

  public function getDialPrefix()
  {
    return 355;
  }

  public function getCurrencyCode()
  {
    return 'ALL';
  }
}
