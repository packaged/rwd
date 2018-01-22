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
        case LanguageCode::LANG_PT:
          return 'Portuguese';
        case LanguageCode::LANG_ES:
          return 'Spanish';
        case LanguageCode::LANG_IT:
          return 'Italian';
        case LanguageCode::LANG_FR:
          return 'French';
        case LanguageCode::LANG_DE:
          return 'German';
        case LanguageCode::LANG_EN:
          return 'English';
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
        case LanguageCode::LANG_PT:
          return 'Português';
        case LanguageCode::LANG_ES:
          return 'Español';
        case LanguageCode::LANG_IT:
          return 'Italiano';
        case LanguageCode::LANG_FR:
          return 'Français';
        case LanguageCode::LANG_DE:
          return 'Deutsche';
        case LanguageCode::LANG_EN:
          return 'English';
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
