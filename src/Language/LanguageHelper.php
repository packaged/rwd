<?php
namespace Packaged\Rwd\Language;

class LanguageHelper
{
  /**
   * @param string $code
   * @param string $default
   *
   * @return LanguageInterface
   */
  public static function getLanguage($code, $default = null)
  {
    $code = $code ?: $default;
    $code = str_replace(' ', '', ucwords(strtolower(str_replace('-', ' ', $code))));
    $className = sprintf('\Packaged\Rwd\Language\Languages\%sLanguage', $code);
    if(class_exists($className))
    {
      return new $className();
    }
    else if($default !== null && $code !== $default)
    {
      return self::getLanguage($default);
    }
    else
    {
      throw new \RuntimeException("$code is not a supported language");
    }
  }

  /**
   * @param bool $useNativeName
   *
   * @return array
   * @throws \ReflectionException
   */
  public static function listAllLanguages($useNativeName = false)
  {
    $languages = [];
    $c = new \ReflectionClass(LanguageCode::class);
    foreach($c->getConstants() as $code)
    {
      try
      {
        $language = self::getLanguage($code);
        $languages[$code] = $useNativeName ? $language->getNativeName() : $language->getEnglishName();
      }
      catch(\RuntimeException $e)
      {
      }
    }
    asort($languages, SORT_STRING | SORT_FLAG_CASE);
    return $languages;
  }
}
