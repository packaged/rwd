<?php
namespace Packaged\Rwd\Language\Languages;

use Packaged\Rwd\Language\AbstractLanguage;
use Packaged\Rwd\Language\LanguageInterface;

class RuLanguage extends AbstractLanguage
{
  public function getEnglishName()
  {
    return 'Russian';
  }

  public function getNativeName()
  {
    return 'Русский';
  }

  public function getCode()
  {
    return 'ru';
  }

  public function getDirection()
  {
    return LanguageInterface::DIRECTION_LTR;
  }
}
