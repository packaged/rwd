<?php
namespace Packaged\Rwd\Language\Languages;

use Packaged\Rwd\Language\AbstractLanguage;
use Packaged\Rwd\Language\LanguageInterface;

class WoLanguage extends AbstractLanguage
{
  public function getEnglishName()
  {
    return 'Wolof';
  }

  public function getNativeName()
  {
    return 'Wollof';
  }

  public function getCode()
  {
    return 'wo';
  }

  public function getDirection()
  {
    return LanguageInterface::DIRECTION_LTR;
  }
}
