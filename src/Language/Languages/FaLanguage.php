<?php
namespace Packaged\Rwd\Language\Languages;

use Packaged\Rwd\Language\LanguageInterface;

class FaLanguage implements LanguageInterface
{
  public function getEnglishName()
  {
    return 'Persian';
  }

  public function getNativeName()
  {
    return '<span dir=\"rtl\">فارسی</span>';
  }

  public function getCode()
  {
    return 'fa';
  }

  public function getDirection()
  {
    return LanguageInterface::DIRECTION_RTL;
  }
}
