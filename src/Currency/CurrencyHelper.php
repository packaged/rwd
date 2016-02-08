<?php
namespace Packaged\Rwd\Currency;

class CurrencyHelper
{
  /**
   * @param string $code
   * @param string $default
   *
   * @return CurrencyInterface|AbstractCurrency
   */
  public static function getCurrency($code, $default = null)
  {
    $code = $code ?: $default;
    $className = sprintf('\Packaged\Rwd\Currency\Currencies\%sCurrency', $code);
    if(class_exists($className))
    {
      return new $className();
    }
    else if($default !== null && $code !== $default)
    {
      return self::getCurrency($default);
    }
    else
    {
      throw new \RuntimeException("$code is not a supported currency");
    }
  }

  /**
   * @return string[]
   */
  public static function listAllCurrencies()
  {
    $currencies = [];
    $c = new \ReflectionClass(CurrencyCode::class);
    foreach($c->getConstants() as $code)
    {
      try
      {
        $currency = self::getCurrency($code)->getName();
        $currencies[$code] = $currency;
      }
      catch(\RuntimeException $e)
      {
      }
    }
    ksort($currencies, SORT_STRING | SORT_FLAG_CASE);
    return $currencies;
  }
}
