<?php
namespace Packaged\Rwd\Language\Languages;

use Packaged\Rwd\Language\LanguageInterface;

class MsLanguage implements LanguageInterface
{
  public function getEnglishName()
  {
    return 'Malay';
  }

  public function getNativeName()
  {
    return 'Bahasa Melayu';
  }

  public function getCode()
  {
    return 'ms';
  }

  public function getDirection()
  {
    return LanguageInterface::DIRECTION_LTR;
  }
}
