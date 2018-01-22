<?php
namespace Packaged\Rwd\Language;

class LanguageHelper
{
  static public function getConstants()
  {
    $languages = new \ReflectionClass(LanguageCode::class);
    return $languages->getConstants();
  }

  /**
   * @param $languageCode
   *
   * @return bool
   */
  static public function isValid($languageCode)
  {
    return in_array(strtolower($languageCode), self::getConstants());
  }

  /**
   * @param $languageCode
   *
   * @return null|string
   */
  static public function getName($languageCode)
  {
    if($languageCode)
    {
      switch(strtolower($languageCode))
      {
        case LanguageCode::PT:
          return LanguageName::PT;
        case LanguageCode::ES:
          return LanguageName::ES;
        case LanguageCode::IT:
          return LanguageName::IT;
        case LanguageCode::FR:
          return LanguageName::FR;
        case LanguageCode::DE:
          return LanguageName::DE;
        case LanguageCode::EN:
          return LanguageName::EN;
      }
    }
    return null;
  }

  /**
   * @param $languageCode
   *
   * @return null|string
   */
  static public function getNativeName($languageCode)
  {
    if($languageCode)
    {
      switch(strtolower($languageCode))
      {
        case LanguageCode::PT:
          return LanguageNativeName::PT;
        case LanguageCode::ES:
          return LanguageNativeName::ES;
        case LanguageCode::IT:
          return LanguageNativeName::IT;
        case LanguageCode::FR:
          return LanguageNativeName::FR;
        case LanguageCode::DE:
          return LanguageNativeName::DE;
        case LanguageCode::EN:
          return LanguageNativeName::EN;
      }
    }
    return null;
  }

  /**
   * @return array
   */
  static public function getKeyValues()
  {
    $languages = [];
    foreach(self::getConstants() as $code)
    {
      $languages[$code] = self::getName($code);
    }
    return $languages;
  }

  /**
   * @return array
   */
  static public function getNativeKeyValues()
  {
    $languages = [];
    foreach(self::getConstants() as $code)
    {
      $languages[$code] = self::getNativeName($code);
    }
    return $languages;
  }
}
