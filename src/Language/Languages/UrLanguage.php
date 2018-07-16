<?php
namespace Packaged\Rwd\Language\Languages;

use Packaged\Rwd\Language\LanguageInterface;

class UrLanguage implements LanguageInterface
{
  public function getEnglishName()
  {
    return 'Urdu';
  }

  public function getNativeName()
  {
    return '<span dir=\"rtl\">اردو</span>';
  }

  public function getCode()
  {
    return 'ur';
  }

  public function getDirection()
  {
    return LanguageInterface::DIRECTION_RTL;
  }
}
