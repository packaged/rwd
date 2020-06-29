<?php
namespace Packaged\Rwd\Language\Languages;

use Packaged\Rwd\Language\AbstractLanguage;
use Packaged\Rwd\Language\LanguageInterface;

class VoLanguage extends AbstractLanguage
{
  public function getEnglishName()
  {
    return 'Volapük';
  }

  public function getNativeName()
  {
    return 'Volapük';
  }

  public function getCode()
  {
    return 'vo';
  }

  public function getDirection()
  {
    return LanguageInterface::DIRECTION_LTR;
  }
}
