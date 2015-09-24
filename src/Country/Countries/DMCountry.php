<?php
namespace Fortifi\Rwd\Country\Countries;

use Fortifi\Rwd\Country\Country;

class DMCountry implements Country
{
  public function getName()
  {
    return 'Dominica';
  }

  public function getIso2()
  {
    return 'DM';
  }

  public function getIso3()
  {
    return 'DMA';
  }

  public function getWmo()
  {
    return 'DO';
  }

  public function getNumericCode()
  {
    return 212;
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
