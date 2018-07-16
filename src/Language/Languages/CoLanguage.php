<?php
namespace Packaged\Rwd\Language\Languages;

use Packaged\Rwd\Language\LanguageInterface;

class CoLanguage implements LanguageInterface
{
  public function getEnglishName()
  {
    return 'Corsican';
  }

  public function getNativeName()
  {
    return 'Corsu';
  }

  public function getCode()
  {
    return 'co';
  }

  public function getDirection()
  {
    return LanguageInterface::DIRECTION_LTR;
  }
}
