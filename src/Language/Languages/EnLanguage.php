<?php
namespace Packaged\Rwd\Language\Languages;

use Packaged\Rwd\Language\LanguageInterface;

class EnLanguage implements LanguageInterface
{
  public function getEnglishName()
  {
    return 'English';
  }

  public function getNativeName()
  {
    return 'English';
  }

  public function getCode()
  {
    return 'en';
  }

  public function getDirection()
  {
    return LanguageInterface::DIRECTION_LTR;
  }
}
