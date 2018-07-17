<?php
namespace Packaged\Rwd\Language\Languages;

use Packaged\Rwd\Language\LanguageInterface;

class TumLanguage implements LanguageInterface
{
  public function getEnglishName()
  {
    return 'Tumbuka';
  }

  public function getNativeName()
  {
    return 'chiTumbuka';
  }

  public function getCode()
  {
    return 'tum';
  }

  public function getDirection()
  {
    return LanguageInterface::DIRECTION_LTR;
  }
}
