<?php
namespace Packaged\Rwd\Language\Languages;

use Packaged\Rwd\Language\LanguageInterface;

class FoLanguage implements LanguageInterface
{
  public function getEnglishName()
  {
    return 'Faroese';
  }

  public function getNativeName()
  {
    return 'Føroyskt';
  }

  public function getCode()
  {
    return 'fo';
  }

  public function getDirection()
  {
    return LanguageInterface::DIRECTION_LTR;
  }
}
