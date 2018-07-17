<?php
namespace Packaged\Rwd\Language\Languages;

use Packaged\Rwd\Language\LanguageInterface;

class SiLanguage implements LanguageInterface
{
  public function getEnglishName()
  {
    return 'Sinhalese';
  }

  public function getNativeName()
  {
    return 'සිංහල';
  }

  public function getCode()
  {
    return 'si';
  }

  public function getDirection()
  {
    return LanguageInterface::DIRECTION_LTR;
  }
}
