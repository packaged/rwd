<?php
namespace Packaged\Rwd\Language\Languages;

use Packaged\Rwd\Language\LanguageInterface;

class HawLanguage implements LanguageInterface
{
  public function getEnglishName()
  {
    return 'Hawaiian';
  }

  public function getNativeName()
  {
    return 'Hawai`i';
  }

  public function getCode()
  {
    return 'haw';
  }

  public function getDirection()
  {
    return LanguageInterface::DIRECTION_LTR;
  }
}
