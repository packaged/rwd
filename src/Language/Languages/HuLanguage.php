<?php
namespace Packaged\Rwd\Language\Languages;

use Packaged\Rwd\Language\LanguageInterface;

class HuLanguage implements LanguageInterface
{
  public function getEnglishName()
  {
    return 'Hungarian';
  }

  public function getNativeName()
  {
    return 'Magyar';
  }

  public function getCode()
  {
    return 'hu';
  }

  public function getDirection()
  {
    return LanguageInterface::DIRECTION_LTR;
  }
}
