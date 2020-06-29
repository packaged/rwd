<?php
namespace Packaged\Rwd\Language\Languages;

use Packaged\Rwd\Language\AbstractLanguage;
use Packaged\Rwd\Language\LanguageInterface;

class TrLanguage extends AbstractLanguage
{
  public function getEnglishName()
  {
    return 'Turkish';
  }

  public function getNativeName()
  {
    return 'Türkçe';
  }

  public function getCode()
  {
    return 'tr';
  }

  public function getDirection()
  {
    return LanguageInterface::DIRECTION_LTR;
  }
}
