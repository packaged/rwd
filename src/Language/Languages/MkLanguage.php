<?php
namespace Packaged\Rwd\Language\Languages;

use Packaged\Rwd\Language\LanguageInterface;

class MkLanguage implements LanguageInterface
{
  public function getEnglishName()
  {
    return 'Macedonian';
  }

  public function getNativeName()
  {
    return 'Македонски';
  }

  public function getCode()
  {
    return 'mk';
  }

  public function getDirection()
  {
    return LanguageInterface::DIRECTION_LTR;
  }
}
