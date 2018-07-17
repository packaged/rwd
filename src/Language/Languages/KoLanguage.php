<?php
namespace Packaged\Rwd\Language\Languages;

use Packaged\Rwd\Language\LanguageInterface;

class KoLanguage implements LanguageInterface
{
  public function getEnglishName()
  {
    return 'Korean';
  }

  public function getNativeName()
  {
    return '한국어';
  }

  public function getCode()
  {
    return 'ko';
  }

  public function getDirection()
  {
    return LanguageInterface::DIRECTION_LTR;
  }
}
