<?php
namespace Packaged\Rwd\Language\Languages;

use Packaged\Rwd\Language\LanguageInterface;

class OsLanguage implements LanguageInterface
{
  public function getEnglishName()
  {
    return 'Ossetian&nbsp;/ Ossetic';
  }

  public function getNativeName()
  {
    return 'Иронау';
  }

  public function getCode()
  {
    return 'os';
  }

  public function getDirection()
  {
    return LanguageInterface::DIRECTION_LTR;
  }
}
