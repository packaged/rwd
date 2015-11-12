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
    $className = sprintf('\Packaged\Rwd\Currency\Currencies\%sCurrency', $code);
    if(class_exists($className))
    {
      return new $className();
    }
    else if($default !== null)
    {
      return self::getCurrency($default);
    }
    else
    {
      throw new \RuntimeException("$code is not a supported currency");
    }
  }
}
