<?php
namespace Packaged\Rwd\Country;

class CountryHelper
{
  /**
   * @param string $code
   *
   * @return CountryInterface
   */
  public static function getCountry($code)
  {
    $className = sprintf('\Packaged\Rwd\Country\Countries\%sCountry', $code);
    if(class_exists($className))
    {
      return new $className();
    }
    else
    {
      throw new \RuntimeException("$code is not a supported country");
    }
  }
}
