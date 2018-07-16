<?php
namespace Packaged\Rwd\Language\Languages;

use Packaged\Rwd\Language\LanguageInterface;

class UzLanguage implements LanguageInterface
{
  public function getEnglishName()
  {
    return 'Uzbek';
  }

  public function getNativeName()
  {
    return 'Ўзбек';
  }

  public function getCode()
  {
    return 'uz';
  }

  public function getDirection()
  {
    return LanguageInterface::DIRECTION_LTR;
  }
}
