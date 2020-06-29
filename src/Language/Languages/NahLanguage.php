<?php
namespace Packaged\Rwd\Language\Languages;

use Packaged\Rwd\Language\AbstractLanguage;
use Packaged\Rwd\Language\LanguageInterface;

class NahLanguage extends AbstractLanguage
{
  public function getEnglishName()
  {
    return 'Nahuatl';
  }

  public function getNativeName()
  {
    return 'Nahuatl';
  }

  public function getCode()
  {
    return 'nah';
  }

  public function getDirection()
  {
    return LanguageInterface::DIRECTION_LTR;
  }
}
