<?php
namespace Packaged\Rwd\Language\Languages;

use Packaged\Rwd\Language\AbstractLanguage;
use Packaged\Rwd\Language\LanguageInterface;

class ArLanguage extends AbstractLanguage
{
  public function getEnglishName()
  {
    return 'Arabic';
  }

  public function getNativeName()
  {
    return '<span dir=\"rtl\">العربية</span>';
  }

  public function getCode()
  {
    return 'ar';
  }

  public function getDirection()
  {
    return LanguageInterface::DIRECTION_RTL;
  }
}
