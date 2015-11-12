<?php
namespace Packaged\Rwd\Country;

class CountryHelper
{
  /**
   * @param string $code
   * @param string $default
   *
   * @return CountryInterface
   */
  public static function getCountry($code, $default = null)
  {
    $className = sprintf('\Packaged\Rwd\Country\Countries\%sCountry', $code);
    if(class_exists($className))
    {
      return new $className();
    }
    else if($default)
    {
      return self::getCountry($default);
    }
    else
    {
      throw new \RuntimeException("$code is not a supported country");
    }
  }
}