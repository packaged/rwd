<?php
namespace Packaged\Rwd\Language\Languages;

use Packaged\Rwd\Language\LanguageInterface;

class SrLanguage implements LanguageInterface
{
  public function getEnglishName()
  {
    return 'Serbian';
  }

  public function getNativeName()
  {
    return 'Српски';
  }

  public function getCode()
  {
    return 'sr';
  }

  public function getDirection()
  {
    return LanguageInterface::DIRECTION_LTR;
  }
}
