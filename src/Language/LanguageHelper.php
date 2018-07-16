<?php
namespace Packaged\Rwd\Language;

class LanguageHelper
{
  const RETURN_ENGLISH_NAME = 'en';
  const RETURN_NATIVE_NAME = 'na';
  const RETURN_OBJECT = 'ob';

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
   * @param string $returnType
   *
   * @return array
   * @throws \ReflectionException
   */
  public static function listAllLanguages($returnType = self::RETURN_ENGLISH_NAME)
  {
    $c = new \ReflectionClass(LanguageCode::class);
    return self::returnLanguages($returnType, $c->getConstants());
  }

  /**
   * @param string $returnType
   *
   * @return array
   */
  public static function commonLanguages($returnType = self::RETURN_ENGLISH_NAME)
  {
    return self::returnLanguages(
      $returnType,
      [
        LanguageCode::CODE_EN,
        LanguageCode::CODE_DE,
        LanguageCode::CODE_FR,
        LanguageCode::CODE_IT,
        LanguageCode::CODE_EN,
        LanguageCode::CODE_PL,
        LanguageCode::CODE_ES,
        LanguageCode::CODE_UK,
        LanguageCode::CODE_RO,
        LanguageCode::CODE_NL,
        LanguageCode::CODE_BAR,
        LanguageCode::CODE_HU,
        LanguageCode::CODE_TR,
        LanguageCode::CODE_EL,
        LanguageCode::CODE_CS,
        LanguageCode::CODE_PT,
        LanguageCode::CODE_SV,
        LanguageCode::CODE_MAN,
        LanguageCode::CODE_HI,
        LanguageCode::CODE_AR,
        LanguageCode::CODE_JA,
        LanguageCode::CODE_PA,
      ]
    );
  }

  protected static function returnLanguages($returnType, $codes)
  {
    $languages = [];
    foreach($codes as $code)
    {
      try
      {
        $language = self::getLanguage($code);
        switch($returnType)
        {
          case self::RETURN_ENGLISH_NAME:
            $languages[$code] = $language->getEnglishName();
            break;
          case self::RETURN_NATIVE_NAME:
            $languages[$code] = $language->getNativeName();
            break;
          case self::RETURN_OBJECT:
            $languages[$code] = $language;
            break;
        }
      }
      catch(\RuntimeException $e)
      {
      }
    }
    asort($languages, SORT_STRING | SORT_FLAG_CASE);
    return $languages;
  }
}
