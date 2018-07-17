<?php
namespace Packaged\Rwd\Language\Languages;

use Packaged\Rwd\Language\LanguageInterface;

class OmLanguage implements LanguageInterface
{
  public function getEnglishName()
  {
    return 'Oromo';
  }

  public function getNativeName()
  {
    return 'Oromoo';
  }

  public function getCode()
  {
    return 'om';
  }

  public function getDirection()
  {
    return LanguageInterface::DIRECTION_LTR;
  }
}
