<?php
namespace Packaged\Rwd\Currency;

class CurrencyHelper
{
  public static function getCurrency($code)
  {
    $className = sprintf('\Packaged\Rwd\Currency\Currencies\%sCurrency', $code);
    if(class_exists($className))
    {
      return new $className();
    }
    else
    {
      throw new \RuntimeException("$code is not a supported currency");
    }
  }
}
