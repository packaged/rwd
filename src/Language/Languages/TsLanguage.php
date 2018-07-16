<?php
namespace Packaged\Rwd\Language\Languages;

use Packaged\Rwd\Language\LanguageInterface;

class TsLanguage implements LanguageInterface
{
  public function getEnglishName()
  {
    return 'Tsonga';
  }

  public function getNativeName()
  {
    return 'Xitsonga';
  }

  public function getCode()
  {
    return 'ts';
  }

  public function getDirection()
  {
    return LanguageInterface::DIRECTION_LTR;
  }
}
