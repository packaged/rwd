<?php
namespace Packaged\Rwd\Language\Languages;

use Packaged\Rwd\Language\LanguageInterface;

class KsLanguage implements LanguageInterface
{
  public function getEnglishName()
  {
    return 'Kashmiri';
  }

  public function getNativeName()
  {
    return '<span dir=\"ltr\">कश्मीरी</span>&nbsp;/ <span dir=\"rtl\">كشميري</span>';
  }

  public function getCode()
  {
    return 'ks';
  }

  public function getDirection()
  {
    return LanguageInterface::DIRECTION_RTL;
  }
}
