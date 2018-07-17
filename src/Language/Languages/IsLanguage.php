<?php
namespace Packaged\Rwd\Language\Languages;

use Packaged\Rwd\Language\LanguageInterface;

class IsLanguage implements LanguageInterface
{
  public function getEnglishName()
  {
    return 'Icelandic';
  }

  public function getNativeName()
  {
    return 'Íslenska';
  }

  public function getCode()
  {
    return 'is';
  }

  public function getDirection()
  {
    return LanguageInterface::DIRECTION_LTR;
  }
}
