<?php
namespace Packaged\Rwd\Language\Languages;

use Packaged\Rwd\Language\AbstractLanguage;
use Packaged\Rwd\Language\LanguageInterface;

class SkLanguage extends AbstractLanguage
{
  public function getEnglishName()
  {
    return 'Slovak';
  }

  public function getNativeName()
  {
    return 'Slovenčina';
  }

  public function getCode()
  {
    return 'sk';
  }

  public function getDirection()
  {
    return LanguageInterface::DIRECTION_LTR;
  }
}
