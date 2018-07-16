<?php
namespace Packaged\Rwd\Language\Languages;

use Packaged\Rwd\Language\LanguageInterface;

class HaLanguage implements LanguageInterface
{
  public function getEnglishName()
  {
    return 'Hausa';
  }

  public function getNativeName()
  {
    return '<span dir=\"rtl\">هَوُسَ</span>';
  }

  public function getCode()
  {
    return 'ha';
  }

  public function getDirection()
  {
    return LanguageInterface::DIRECTION_RTL;
  }
}
