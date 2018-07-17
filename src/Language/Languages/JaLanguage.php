<?php
namespace Packaged\Rwd\Language\Languages;

use Packaged\Rwd\Language\LanguageInterface;

class JaLanguage implements LanguageInterface
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
