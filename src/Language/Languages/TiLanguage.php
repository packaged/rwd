<?php
namespace Packaged\Rwd\Language\Languages;

use Packaged\Rwd\Language\LanguageInterface;

class TiLanguage implements LanguageInterface
{
  public function getEnglishName()
  {
    return 'Tigrinya';
  }

  public function getNativeName()
  {
    return 'ትግርኛ';
  }

  public function getCode()
  {
    return 'ti';
  }

  public function getDirection()
  {
    return LanguageInterface::DIRECTION_LTR;
  }
}
