<?php
namespace Packaged\Rwd\Language\Languages;

use Packaged\Rwd\Language\LanguageInterface;

class RoLanguage implements LanguageInterface
{
  public function getEnglishName()
  {
    return 'Romanian';
  }

  public function getNativeName()
  {
    return 'Română';
  }

  public function getCode()
  {
    return 'ro';
  }

  public function getDirection()
  {
    return LanguageInterface::DIRECTION_LTR;
  }
}
