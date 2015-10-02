<?php
namespace Packaged\Rwd\Country\Countries;

use Packaged\Rwd\Country\CountryInterface;

class JMCountry implements CountryInterface
{
  public function getName()
  {
    return 'Jamaica';
  }

  public function getIso2()
  {
    return 'JM';
  }

  public function getIso3()
  {
    return 'JAM';
  }

  public function getWmo()
  {
    return 'JM';
  }

  public function getNumericCode()
  {
    return 388;
  }

  public function getDialPrefix()
  {
    return 1;
  }

  public function getCurrencyCode()
  {
    return 'JMD';
  }
}
