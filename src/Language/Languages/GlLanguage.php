<?php
namespace Packaged\Rwd\Language\Languages;

use Packaged\Rwd\Language\LanguageInterface;

class GlLanguage implements LanguageInterface
{
  public function getEnglishName()
  {
    return 'Galician';
  }

  public function getNativeName()
  {
    return 'Galego';
  }

  public function getCode()
  {
    return 'gl';
  }

  public function getDirection()
  {
    return LanguageInterface::DIRECTION_LTR;
  }
}
