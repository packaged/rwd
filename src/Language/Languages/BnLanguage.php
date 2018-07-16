<?php
namespace Packaged\Rwd\Language\Languages;

use Packaged\Rwd\Language\LanguageInterface;

class BnLanguage implements LanguageInterface
{
  public function getEnglishName()
  {
    return 'Bengali';
  }

  public function getNativeName()
  {
    return 'বাংলা';
  }

  public function getCode()
  {
    return 'bn';
  }

  public function getDirection()
  {
    return LanguageInterface::DIRECTION_LTR;
  }
}
