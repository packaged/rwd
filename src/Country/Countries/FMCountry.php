<?php
namespace Packaged\Rwd\Country\Countries;

use Packaged\Rwd\Country\CountryInterface;

class FMCountry implements CountryInterface
{
  public function getName()
  {
    return 'Micronesia, Federated States of';
  }

  public function getIso2()
  {
    return 'FM';
  }

  public function getIso3()
  {
    return 'FSM';
  }

  public function getWmo()
  {
    return ' ';
  }

  public function getNumericCode()
  {
    return 583;
  }

  public function getDialPrefix()
  {
    return 691;
  }

  public function getCurrencyCode()
  {
    return 'USD';
  }
}
