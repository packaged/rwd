<?php
namespace Packaged\Rwd\Language\Languages;

use Packaged\Rwd\Language\AbstractLanguage;
use Packaged\Rwd\Language\LanguageInterface;

class UrLanguage extends AbstractLanguage
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
