<?php
namespace Packaged\Rwd\Language\Languages;

use Packaged\Rwd\Language\AbstractLanguage;
use Packaged\Rwd\Language\LanguageInterface;

class LaLanguage extends AbstractLanguage
{
  public function getEnglishName()
  {
    return 'Latin';
  }

  public function getNativeName()
  {
    return 'Latina';
  }

  public function getCode()
  {
    return 'la';
  }

  public function getDirection()
  {
    return LanguageInterface::DIRECTION_LTR;
  }
}
