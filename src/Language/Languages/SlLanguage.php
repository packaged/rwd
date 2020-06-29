<?php
namespace Packaged\Rwd\Language\Languages;

use Packaged\Rwd\Language\AbstractLanguage;
use Packaged\Rwd\Language\LanguageInterface;

class SlLanguage extends AbstractLanguage
{
  public function getEnglishName()
  {
    return 'Slovenian';
  }

  public function getNativeName()
  {
    return 'Slovenščina';
  }

  public function getCode()
  {
    return 'sl';
  }

  public function getDirection()
  {
    return LanguageInterface::DIRECTION_LTR;
  }
}
