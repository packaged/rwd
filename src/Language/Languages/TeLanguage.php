<?php
namespace Packaged\Rwd\Language\Languages;

use Packaged\Rwd\Language\LanguageInterface;

class TeLanguage implements LanguageInterface
{
  public function getEnglishName()
  {
    return 'Telugu';
  }

  public function getNativeName()
  {
    return 'తెలుగు';
  }

  public function getCode()
  {
    return 'te';
  }

  public function getDirection()
  {
    return LanguageInterface::DIRECTION_LTR;
  }
}
