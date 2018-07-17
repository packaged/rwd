<?php
namespace Packaged\Rwd\Language\Languages;

use Packaged\Rwd\Language\LanguageInterface;

class MyLanguage implements LanguageInterface
{
  public function getEnglishName()
  {
    return 'Burmese';
  }

  public function getNativeName()
  {
    return 'Myanmasa';
  }

  public function getCode()
  {
    return 'my';
  }

  public function getDirection()
  {
    return LanguageInterface::DIRECTION_LTR;
  }
}
