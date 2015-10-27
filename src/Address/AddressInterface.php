<?php
namespace Packaged\Rwd\Address;

interface AddressInterface
{
  public function getLineOne();

  public function getLineTwo();

  public function getLineThree();

  public function getTown();

  public function getCounty();

  public function getCountry();

  public function getPostalCode();

}
