<?php
namespace Packaged\Rwd\Language\Languages;

use Packaged\Rwd\Language\LanguageInterface;

class TlhLanguage implements LanguageInterface
{
  public function getEnglishName()
  {
    return 'Klingon';
  }

  public function getNativeName()
  {
    return 'tlhIngan-Hol';
  }

  public function getCode()
  {
    return 'tlh';
  }

  public function getDirection()
  {
    return LanguageInterface::DIRECTION_LTR;
  }
}
