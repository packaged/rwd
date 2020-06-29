<?php
namespace Packaged\Rwd\Language\Languages;

use Packaged\Rwd\Language\AbstractLanguage;
use Packaged\Rwd\Language\LanguageInterface;

class LvLanguage extends AbstractLanguage
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
