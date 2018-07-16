<?php
namespace Packaged\Rwd\Language\Languages;

use Packaged\Rwd\Language\LanguageInterface;

class KaLanguage implements LanguageInterface
{
  public function getEnglishName()
  {
    return 'Georgian';
  }

  public function getNativeName()
  {
    return 'ქართული';
  }

  public function getCode()
  {
    return 'ka';
  }

  public function getDirection()
  {
    return LanguageInterface::DIRECTION_LTR;
  }
}
