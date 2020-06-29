<?php
namespace Packaged\Rwd\Language\Languages;

use Packaged\Rwd\Language\AbstractLanguage;
use Packaged\Rwd\Language\LanguageInterface;

class MoLanguage extends AbstractLanguage
{
  public function getEnglishName()
  {
    return 'Moldovan';
  }

  public function getNativeName()
  {
    return 'Moldovenească';
  }

  public function getCode()
  {
    return 'mo';
  }

  public function getDirection()
  {
    return LanguageInterface::DIRECTION_LTR;
  }
}
