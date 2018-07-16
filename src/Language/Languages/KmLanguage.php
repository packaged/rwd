<?php
namespace Packaged\Rwd\Language\Languages;

use Packaged\Rwd\Language\LanguageInterface;

class KmLanguage implements LanguageInterface
{
  public function getEnglishName()
  {
    return 'Cambodian';
  }

  public function getNativeName()
  {
    return 'ភាសាខ្មែរ';
  }

  public function getCode()
  {
    return 'km';
  }

  public function getDirection()
  {
    return LanguageInterface::DIRECTION_LTR;
  }
}
