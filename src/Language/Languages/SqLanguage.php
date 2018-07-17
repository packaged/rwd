<?php
namespace Packaged\Rwd\Language\Languages;

use Packaged\Rwd\Language\LanguageInterface;

class SqLanguage implements LanguageInterface
{
  public function getEnglishName()
  {
    return 'Albanian';
  }

  public function getNativeName()
  {
    return 'Shqip';
  }

  public function getCode()
  {
    return 'sq';
  }

  public function getDirection()
  {
    return LanguageInterface::DIRECTION_LTR;
  }
}
