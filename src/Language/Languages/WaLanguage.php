<?php
namespace Packaged\Rwd\Language\Languages;

use Packaged\Rwd\Language\AbstractLanguage;
use Packaged\Rwd\Language\LanguageInterface;

class WaLanguage extends AbstractLanguage
{
  public function getEnglishName()
  {
    return 'Walloon';
  }

  public function getNativeName()
  {
    return 'Walon';
  }

  public function getCode()
  {
    return 'wa';
  }

  public function getDirection()
  {
    return LanguageInterface::DIRECTION_LTR;
  }
}
