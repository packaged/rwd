<?php
namespace Packaged\Rwd\Language\Languages;

use Packaged\Rwd\Language\LanguageInterface;

class NeLanguage implements LanguageInterface
{
  public function getEnglishName()
  {
    return 'Nepali';
  }

  public function getNativeName()
  {
    return 'नेपाली';
  }

  public function getCode()
  {
    return 'ne';
  }

  public function getDirection()
  {
    return LanguageInterface::DIRECTION_LTR;
  }
}
