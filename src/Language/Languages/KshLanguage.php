<?php
namespace Packaged\Rwd\Language\Languages;

use Packaged\Rwd\Language\LanguageInterface;

class KshLanguage implements LanguageInterface
{
  public function getEnglishName()
  {
    return 'Ripuarian';
  }

  public function getNativeName()
  {
    return 'Ripoarisch';
  }

  public function getCode()
  {
    return 'ksh';
  }

  public function getDirection()
  {
    return LanguageInterface::DIRECTION_LTR;
  }
}
