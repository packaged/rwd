<?php
namespace Packaged\Rwd\Language\Languages;

use Packaged\Rwd\Language\LanguageInterface;

class MrLanguage implements LanguageInterface
{
  public function getEnglishName()
  {
    return 'Marathi';
  }

  public function getNativeName()
  {
    return 'मराठी';
  }

  public function getCode()
  {
    return 'mr';
  }

  public function getDirection()
  {
    return LanguageInterface::DIRECTION_LTR;
  }
}
