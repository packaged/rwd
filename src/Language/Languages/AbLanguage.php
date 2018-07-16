<?php
namespace Packaged\Rwd\Language\Languages;

use Packaged\Rwd\Language\LanguageInterface;

class AbLanguage implements LanguageInterface
{
  public function getEnglishName()
  {
    return 'Abkhazian';
  }

  public function getNativeName()
  {
    return 'Аҧсуа';
  }

  public function getCode()
  {
    return 'ab';
  }

  public function getDirection()
  {
    return LanguageInterface::DIRECTION_LTR;
  }
}
