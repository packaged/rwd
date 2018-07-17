<?php
namespace Packaged\Rwd\Language\Languages;

use Packaged\Rwd\Language\LanguageInterface;

class SimpleLanguage implements LanguageInterface
{
  public function getEnglishName()
  {
    return 'Simple English';
  }

  public function getNativeName()
  {
    return 'Simple English';
  }

  public function getCode()
  {
    return 'simple';
  }

  public function getDirection()
  {
    return LanguageInterface::DIRECTION_LTR;
  }
}
