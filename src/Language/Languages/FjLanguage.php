<?php
namespace Packaged\Rwd\Language\Languages;

use Packaged\Rwd\Language\LanguageInterface;

class FjLanguage implements LanguageInterface
{
  public function getEnglishName()
  {
    return 'Fijian';
  }

  public function getNativeName()
  {
    return 'Na Vosa Vakaviti';
  }

  public function getCode()
  {
    return 'fj';
  }

  public function getDirection()
  {
    return LanguageInterface::DIRECTION_LTR;
  }
}
