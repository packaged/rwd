<?php
namespace Packaged\Rwd\Language\Languages;

use Packaged\Rwd\Language\LanguageInterface;

class ThLanguage implements LanguageInterface
{
  public function getEnglishName()
  {
    return 'Thai';
  }

  public function getNativeName()
  {
    return 'ไทย&nbsp;/ Phasa Thai';
  }

  public function getCode()
  {
    return 'th';
  }

  public function getDirection()
  {
    return LanguageInterface::DIRECTION_LTR;
  }
}
