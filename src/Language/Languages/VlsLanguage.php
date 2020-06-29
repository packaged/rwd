<?php
namespace Packaged\Rwd\Language\Languages;

use Packaged\Rwd\Language\AbstractLanguage;
use Packaged\Rwd\Language\LanguageInterface;

class VlsLanguage extends AbstractLanguage
{
  public function getEnglishName()
  {
    return 'West Flemish';
  }

  public function getNativeName()
  {
    return 'West-Vlaoms';
  }

  public function getCode()
  {
    return 'vls';
  }

  public function getDirection()
  {
    return LanguageInterface::DIRECTION_LTR;
  }
}
