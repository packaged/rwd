<?php
namespace Packaged\Rwd\Language\Languages;

use Packaged\Rwd\Language\AbstractLanguage;
use Packaged\Rwd\Language\LanguageInterface;

class DiqLanguage extends AbstractLanguage
{
  public function getEnglishName()
  {
    return 'Dimli';
  }

  public function getNativeName()
  {
    return 'Zazaki';
  }

  public function getCode()
  {
    return 'diq';
  }

  public function getDirection()
  {
    return LanguageInterface::DIRECTION_LTR;
  }
}
