<?php
namespace Packaged\Rwd\Language\Languages;

use Packaged\Rwd\Language\LanguageInterface;

class FrLanguage implements LanguageInterface
{
  public function getEnglishName()
  {
    return 'French';
  }

  public function getNativeName()
  {
    return 'Français';
  }

  public function getCode()
  {
    return 'fr';
  }

  public function getDirection()
  {
    return LanguageInterface::DIRECTION_LTR;
  }
}
