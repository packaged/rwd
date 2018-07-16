<?php
namespace Packaged\Rwd\Language\Languages;

use Packaged\Rwd\Language\LanguageInterface;

class MnLanguage implements LanguageInterface
{
  public function getEnglishName()
  {
    return 'Mongolian';
  }

  public function getNativeName()
  {
    return 'Монгол';
  }

  public function getCode()
  {
    return 'mn';
  }

  public function getDirection()
  {
    return LanguageInterface::DIRECTION_LTR;
  }
}
