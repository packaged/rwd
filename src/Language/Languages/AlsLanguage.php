<?php
namespace Packaged\Rwd\Language\Languages;

use Packaged\Rwd\Language\LanguageInterface;

class AlsLanguage implements LanguageInterface
{
  public function getEnglishName()
  {
    return 'Alemannic';
  }

  public function getNativeName()
  {
    return 'Alemannisch';
  }

  public function getCode()
  {
    return 'als';
  }

  public function getDirection()
  {
    return LanguageInterface::DIRECTION_LTR;
  }
}
