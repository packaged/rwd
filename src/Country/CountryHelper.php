<?php
namespace Packaged\Rwd\Country;

class CountryHelper
{
  private static $_euCodes = [
    CountryCode::CODE_AT,
    CountryCode::CODE_BE,
    CountryCode::CODE_BG,
    CountryCode::CODE_CY,
    CountryCode::CODE_CZ,
    CountryCode::CODE_DE,
    CountryCode::CODE_DK,
    CountryCode::CODE_EE,
    CountryCode::CODE_ES,
    CountryCode::CODE_FI,
    CountryCode::CODE_FR,
    CountryCode::CODE_GB,
    CountryCode::CODE_GR,
    CountryCode::CODE_HR,
    CountryCode::CODE_HU,
    CountryCode::CODE_IE,
    CountryCode::CODE_IT,
    CountryCode::CODE_LT,
    CountryCode::CODE_LU,
    CountryCode::CODE_LV,
    CountryCode::CODE_MT,
    CountryCode::CODE_NL,
    CountryCode::CODE_PL,
    CountryCode::CODE_PT,
    CountryCode::CODE_RO,
    CountryCode::CODE_SE,
    CountryCode::CODE_SI,
    CountryCode::CODE_SK,
  ];

  /**
   * @param string $code
   * @param string $default
   *
   * @return CountryInterface
   */
  public static function getCountry($code, $default = null)
  {
    $code = $code ?: $default;
    $className = sprintf('\Packaged\Rwd\Country\Countries\%sCountry', $code);
    if(class_exists($className))
    {
      return new $className();
    }
    else if($default !== null && $code !== $default)
    {
      return self::getCountry($default);
    }
    else
    {
      throw new \RuntimeException("$code is not a supported country");
    }
  }

  public static function listAllCountries()
  {
    $countries = [];
    $c = new \ReflectionClass(CountryCode::class);
    foreach($c->getConstants() as $code)
    {
      try
      {
        $country = self::getCountry($code)->getName();
        $countries[$code] = $country;
      }
      catch(\RuntimeException $e)
      {
      }
    }
    asort($countries, SORT_STRING | SORT_FLAG_CASE);
    return $countries;
  }

  public static function listEuCountries()
  {
    $countries = [];
    foreach(self::$_euCodes as $code)
    {
      try
      {
        $country = self::getCountry($code)->getName();
        $countries[$code] = $country;
      }
      catch(\RuntimeException $e)
      {
      }
    }
    asort($countries, SORT_STRING | SORT_FLAG_CASE);
    return $countries;
  }
}
