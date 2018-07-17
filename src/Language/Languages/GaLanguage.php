<?php
namespace Packaged\Rwd\Language\Languages;

use Packaged\Rwd\Language\LanguageInterface;

class GaLanguage implements LanguageInterface
{
  public function getEnglishName()
  {
    return 'Irish';
  }

  public function getNativeName()
  {
    return 'Gaeilge';
  }

  public function getCode()
  {
    return 'ga';
  }

  public function getDirection()
  {
    return LanguageInterface::DIRECTION_LTR;
  }
}
