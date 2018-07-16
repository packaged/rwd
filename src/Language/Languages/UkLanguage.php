<?php
namespace Packaged\Rwd\Language\Languages;

use Packaged\Rwd\Language\LanguageInterface;

class UkLanguage implements LanguageInterface
{
  public function getEnglishName()
  {
    return 'Ukrainian';
  }

  public function getNativeName()
  {
    return 'Українська';
  }

  public function getCode()
  {
    return 'uk';
  }

  public function getDirection()
  {
    return LanguageInterface::DIRECTION_LTR;
  }
}
