<?php
namespace Packaged\Rwd\Language\Languages;

use Packaged\Rwd\Language\AbstractLanguage;
use Packaged\Rwd\Language\LanguageInterface;

class TaLanguage extends AbstractLanguage
{
  public function getEnglishName()
  {
    return 'Tamil';
  }

  public function getNativeName()
  {
    return 'தமிழ்';
  }

  public function getCode()
  {
    return 'ta';
  }

  public function getDirection()
  {
    return LanguageInterface::DIRECTION_LTR;
  }
}
