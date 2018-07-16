<?php
namespace Packaged\Rwd\Language\Languages;

use Packaged\Rwd\Language\LanguageInterface;

class SeLanguage implements LanguageInterface
{
  public function getEnglishName()
  {
    return 'Northern Sami';
  }

  public function getNativeName()
  {
    return 'Davvisámegiella';
  }

  public function getCode()
  {
    return 'se';
  }

  public function getDirection()
  {
    return LanguageInterface::DIRECTION_LTR;
  }
}
