<?php
namespace Packaged\Rwd\Language\Languages;

use Packaged\Rwd\Language\LanguageInterface;

class IoLanguage implements LanguageInterface
{
  public function getEnglishName()
  {
    return 'Ido';
  }

  public function getNativeName()
  {
    return 'Ido';
  }

  public function getCode()
  {
    return 'io';
  }

  public function getDirection()
  {
    return LanguageInterface::DIRECTION_LTR;
  }
}
