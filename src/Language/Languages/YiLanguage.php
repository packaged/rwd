<?php
namespace Packaged\Rwd\Language\Languages;

use Packaged\Rwd\Language\AbstractLanguage;
use Packaged\Rwd\Language\LanguageInterface;

class YiLanguage extends AbstractLanguage
{
  public function getEnglishName()
  {
    return 'Yiddish';
  }

  public function getNativeName()
  {
    return '<span dir=\"rtl\">ייִדיש</span>';
  }

  public function getCode()
  {
    return 'yi';
  }

  public function getDirection()
  {
    return LanguageInterface::DIRECTION_RTL;
  }
}
