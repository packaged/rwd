<?php
namespace Packaged\Rwd\Language\Languages;

use Packaged\Rwd\Language\LanguageInterface;

class HoLanguage implements LanguageInterface
{
  public function getEnglishName()
  {
    return 'Hiri Motu';
  }

  public function getNativeName()
  {
    return 'Hiri Motu';
  }

  public function getCode()
  {
    return 'ho';
  }

  public function getDirection()
  {
    return LanguageInterface::DIRECTION_LTR;
  }
}
