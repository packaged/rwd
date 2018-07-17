<?php
namespace Packaged\Rwd\Language\Languages;

use Packaged\Rwd\Language\LanguageInterface;

class DiqLanguage implements LanguageInterface
{
  public function getEnglishName()
  {
    return 'Dimli';
  }

  public function getNativeName()
  {
    return 'Zazaki';
  }

  public function getCode()
  {
    return 'diq';
  }

  public function getDirection()
  {
    return LanguageInterface::DIRECTION_LTR;
  }
}
