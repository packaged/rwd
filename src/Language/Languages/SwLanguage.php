<?php
namespace Packaged\Rwd\Language\Languages;

use Packaged\Rwd\Language\LanguageInterface;

class SwLanguage implements LanguageInterface
{
  public function getEnglishName()
  {
    return 'Swahili';
  }

  public function getNativeName()
  {
    return 'Kiswahili';
  }

  public function getCode()
  {
    return 'sw';
  }

  public function getDirection()
  {
    return LanguageInterface::DIRECTION_LTR;
  }
}
