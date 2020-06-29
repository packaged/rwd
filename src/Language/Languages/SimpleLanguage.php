<?php
namespace Packaged\Rwd\Language\Languages;

use Packaged\Rwd\Language\AbstractLanguage;
use Packaged\Rwd\Language\LanguageInterface;

class SimpleLanguage extends AbstractLanguage
{
  public function getEnglishName()
  {
    return 'Simple English';
  }

  public function getNativeName()
  {
    return 'Simple English';
  }

  public function getCode()
  {
    return 'simple';
  }

  public function getDirection()
  {
    return LanguageInterface::DIRECTION_LTR;
  }
}
