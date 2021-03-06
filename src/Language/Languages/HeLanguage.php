<?php
namespace Packaged\Rwd\Language\Languages;

use Packaged\Rwd\Language\AbstractLanguage;
use Packaged\Rwd\Language\LanguageInterface;

class HeLanguage extends AbstractLanguage
{
  public function getEnglishName()
  {
    return 'Hebrew';
  }

  public function getNativeName()
  {
    return '<span dir=\"rtl\">עברית</span>';
  }

  public function getCode()
  {
    return 'he';
  }

  public function getDirection()
  {
    return LanguageInterface::DIRECTION_RTL;
  }
}
