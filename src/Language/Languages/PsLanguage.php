<?php
namespace Packaged\Rwd\Language\Languages;

use Packaged\Rwd\Language\LanguageInterface;

class PsLanguage implements LanguageInterface
{
  public function getEnglishName()
  {
    return 'Pashto';
  }

  public function getNativeName()
  {
    return '<span dir=\"rtl\">پښتو</span>';
  }

  public function getCode()
  {
    return 'ps';
  }

  public function getDirection()
  {
    return LanguageInterface::DIRECTION_RTL;
  }
}
