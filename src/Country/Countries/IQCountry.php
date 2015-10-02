<?php
namespace Packaged\Rwd\Country\Countries;

use Packaged\Rwd\Country\CountryInterface;

class IQCountry implements CountryInterface
{
  public function getName()
  {
    return 'Iraq';
  }

  public function getIso2()
  {
    return 'IQ';
  }

  public function getIso3()
  {
    return 'IRQ';
  }

  public function getWmo()
  {
    return 'IQ';
  }

  public function getNumericCode()
  {
    return 368;
  }

  public function getDialPrefix()
  {
    return 964;
  }

  public function getCurrencyCode()
  {
    return 'IQD';
  }
}
