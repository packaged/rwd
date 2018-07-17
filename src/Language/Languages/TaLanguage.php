<?php
namespace Packaged\Rwd\Language\Languages;

use Packaged\Rwd\Language\LanguageInterface;

class TaLanguage implements LanguageInterface
{
  public function getEnglishName()
  {
    return 'Tamil';
  }

  public function getNativeName()
  {
    return 'தமிழ்';
  }

  public function getCode()
  {
    return 'ta';
  }

  public function getDirection()
  {
    return LanguageInterface::DIRECTION_LTR;
  }
}
