<?php
namespace Packaged\Rwd\Language\Languages;

use Packaged\Rwd\Language\LanguageInterface;

class SsLanguage implements LanguageInterface
{
  public function getEnglishName()
  {
    return 'Swati';
  }

  public function getNativeName()
  {
    return 'SiSwati';
  }

  public function getCode()
  {
    return 'ss';
  }

  public function getDirection()
  {
    return LanguageInterface::DIRECTION_LTR;
  }
}
