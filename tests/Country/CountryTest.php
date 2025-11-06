<?php

namespace Packaged\Tests\Rwd\Country;

use Packaged\Rwd\Country\CountryHelper;
use PHPUnit\Framework\TestCase;

class CountryTest extends TestCase
{
  public function testCountryUppercase()
  {
    $us = CountryHelper::getCountry('US');
    self::assertEquals('United States', $us->getName());
  }

  public function testCountryLowercase()
  {
    $us = CountryHelper::getCountry('us');
    self::assertEquals('United States', $us->getName());
  }
}
