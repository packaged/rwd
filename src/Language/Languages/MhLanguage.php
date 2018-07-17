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
    return 'Kajin Majel&nbsp;/ Ebon';
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
