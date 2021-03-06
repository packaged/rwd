<?php
namespace Packaged\Rwd\Language\Languages;

use Packaged\Rwd\Language\AbstractLanguage;
use Packaged\Rwd\Language\LanguageInterface;

class ChLanguage extends AbstractLanguage
{
  public function getEnglishName()
  {
    return 'Chamorro';
  }

  public function getNativeName()
  {
    return 'Chamoru';
  }

  public function getCode()
  {
    return 'ch';
  }

  public function getDirection()
  {
    return LanguageInterface::DIRECTION_LTR;
  }
}
