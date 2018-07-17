<?php
namespace Packaged\Rwd\Language\Languages;

use Packaged\Rwd\Language\LanguageInterface;

class ElLanguage implements LanguageInterface
{
  public function getEnglishName()
  {
    return 'Greek';
  }

  public function getNativeName()
  {
    return 'Ελληνικά';
  }

  public function getCode()
  {
    return 'el';
  }

  public function getDirection()
  {
    return LanguageInterface::DIRECTION_LTR;
  }
}
