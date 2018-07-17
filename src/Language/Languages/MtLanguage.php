<?php
namespace Packaged\Rwd\Language\Languages;

use Packaged\Rwd\Language\LanguageInterface;

class MtLanguage implements LanguageInterface
{
  public function getEnglishName()
  {
    return 'Maltese';
  }

  public function getNativeName()
  {
    return 'bil-Malti';
  }

  public function getCode()
  {
    return 'mt';
  }

  public function getDirection()
  {
    return LanguageInterface::DIRECTION_LTR;
  }
}
