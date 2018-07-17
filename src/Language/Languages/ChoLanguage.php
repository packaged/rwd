<?php
namespace Packaged\Rwd\Language\Languages;

use Packaged\Rwd\Language\LanguageInterface;

class ChoLanguage implements LanguageInterface
{
  public function getEnglishName()
  {
    return 'Choctaw';
  }

  public function getNativeName()
  {
    return 'Choctaw';
  }

  public function getCode()
  {
    return 'cho';
  }

  public function getDirection()
  {
    return LanguageInterface::DIRECTION_LTR;
  }
}
