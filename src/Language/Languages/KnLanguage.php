<?php
namespace Packaged\Rwd\Language\Languages;

use Packaged\Rwd\Language\AbstractLanguage;
use Packaged\Rwd\Language\LanguageInterface;

class KnLanguage extends AbstractLanguage
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
