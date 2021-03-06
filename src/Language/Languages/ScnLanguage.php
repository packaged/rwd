<?php
namespace Packaged\Rwd\Language\Languages;

use Packaged\Rwd\Language\AbstractLanguage;
use Packaged\Rwd\Language\LanguageInterface;

class ScnLanguage extends AbstractLanguage
{
  public function getEnglishName()
  {
    return 'Sicilian';
  }

  public function getNativeName()
  {
    return 'Sicilianu';
  }

  public function getCode()
  {
    return 'scn';
  }

  public function getDirection()
  {
    return LanguageInterface::DIRECTION_LTR;
  }
}
