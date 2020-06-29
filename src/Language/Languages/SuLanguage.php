<?php
namespace Packaged\Rwd\Language\Languages;

use Packaged\Rwd\Language\AbstractLanguage;
use Packaged\Rwd\Language\LanguageInterface;

class SuLanguage extends AbstractLanguage
{
  public function getEnglishName()
  {
    return 'Sundanese';
  }

  public function getNativeName()
  {
    return 'Basa Sunda';
  }

  public function getCode()
  {
    return 'su';
  }

  public function getDirection()
  {
    return LanguageInterface::DIRECTION_LTR;
  }
}
