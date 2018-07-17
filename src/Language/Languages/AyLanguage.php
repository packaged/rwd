<?php
namespace Packaged\Rwd\Language\Languages;

use Packaged\Rwd\Language\LanguageInterface;

class AyLanguage implements LanguageInterface
{
  public function getEnglishName()
  {
    return 'Aymara';
  }

  public function getNativeName()
  {
    return 'Aymar';
  }

  public function getCode()
  {
    return 'ay';
  }

  public function getDirection()
  {
    return LanguageInterface::DIRECTION_LTR;
  }
}
