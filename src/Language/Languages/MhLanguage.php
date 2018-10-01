<?php
namespace Packaged\Rwd\Language\Languages;

use Packaged\Rwd\Language\LanguageInterface;

class MhLanguage implements LanguageInterface
{
  public function getEnglishName()
  {
    return 'Marshallese';
  }

  public function getNativeName()
  {
    return 'Kajin Majel / Ebon';
  }

  public function getCode()
  {
    return 'mh';
  }

  public function getDirection()
  {
    return LanguageInterface::DIRECTION_LTR;
  }
}
