<?php
namespace Packaged\Rwd\Language\Languages;

use Packaged\Rwd\Language\AbstractLanguage;
use Packaged\Rwd\Language\LanguageInterface;

class FurLanguage extends AbstractLanguage
{
  public function getEnglishName()
  {
    return 'Friulian';
  }

  public function getNativeName()
  {
    return 'Furlan';
  }

  public function getCode()
  {
    return 'fur';
  }

  public function getDirection()
  {
    return LanguageInterface::DIRECTION_LTR;
  }
}
