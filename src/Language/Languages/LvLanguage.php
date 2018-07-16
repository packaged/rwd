<?php
namespace Packaged\Rwd\Language\Languages;

use Packaged\Rwd\Language\LanguageInterface;

class LvLanguage implements LanguageInterface
{
  public function getEnglishName()
  {
    return 'Latvian';
  }

  public function getNativeName()
  {
    return 'Latviešu';
  }

  public function getCode()
  {
    return 'lv';
  }

  public function getDirection()
  {
    return LanguageInterface::DIRECTION_LTR;
  }
}
