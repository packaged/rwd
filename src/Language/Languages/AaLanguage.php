<?php
namespace Packaged\Rwd\Language\Languages;

use Packaged\Rwd\Language\LanguageInterface;

class AaLanguage implements LanguageInterface
{
  public function getEnglishName()
  {
    return 'Afar';
  }

  public function getNativeName()
  {
    return 'Afar';
  }

  public function getCode()
  {
    return 'aa';
  }

  public function getDirection()
  {
    return LanguageInterface::DIRECTION_LTR;
  }
}
