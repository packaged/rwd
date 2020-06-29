<?php
namespace Packaged\Rwd\Language\Languages;

use Packaged\Rwd\Language\AbstractLanguage;
use Packaged\Rwd\Language\LanguageInterface;

class HawLanguage extends AbstractLanguage
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
