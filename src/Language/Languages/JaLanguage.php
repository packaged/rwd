<?php
namespace Packaged\Rwd\Language\Languages;

use Packaged\Rwd\Language\AbstractLanguage;
use Packaged\Rwd\Language\LanguageInterface;

class JaLanguage extends AbstractLanguage
{
  public function getEnglishName()
  {
    return 'Japanese';
  }

  public function getNativeName()
  {
    return '日本語';
  }

  public function getCode()
  {
    return 'ja';
  }

  public function getDirection()
  {
    return LanguageInterface::DIRECTION_LTR;
  }
}
