<?php
namespace Packaged\Rwd\Language\Languages;

use Packaged\Rwd\Language\LanguageInterface;

class KnLanguage implements LanguageInterface
{
  public function getEnglishName()
  {
    return 'Kannada';
  }

  public function getNativeName()
  {
    return 'ಕನ್ನಡ';
  }

  public function getCode()
  {
    return 'kn';
  }

  public function getDirection()
  {
    return LanguageInterface::DIRECTION_LTR;
  }
}
