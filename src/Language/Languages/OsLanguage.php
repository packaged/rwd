<?php
namespace Packaged\Rwd\Language\Languages;

use Packaged\Rwd\Language\AbstractLanguage;
use Packaged\Rwd\Language\LanguageInterface;

class OsLanguage extends AbstractLanguage
{
  public function getEnglishName()
  {
    return 'Ossetian / Ossetic';
  }

  public function getNativeName()
  {
    return 'Иронау';
  }

  public function getCode()
  {
    return 'os';
  }

  public function getDirection()
  {
    return LanguageInterface::DIRECTION_LTR;
  }
}
