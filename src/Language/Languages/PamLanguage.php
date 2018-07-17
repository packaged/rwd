<?php
namespace Packaged\Rwd\Language\Languages;

use Packaged\Rwd\Language\LanguageInterface;

class PamLanguage implements LanguageInterface
{
  public function getEnglishName()
  {
    return 'Kapampangan';
  }

  public function getNativeName()
  {
    return 'Kapampangan';
  }

  public function getCode()
  {
    return 'pam';
  }

  public function getDirection()
  {
    return LanguageInterface::DIRECTION_LTR;
  }
}
