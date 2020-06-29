<?php
namespace Packaged\Rwd\Language\Languages;

use Packaged\Rwd\Language\AbstractLanguage;
use Packaged\Rwd\Language\LanguageInterface;

class TnLanguage extends AbstractLanguage
{
  public function getEnglishName()
  {
    return 'Tswana';
  }

  public function getNativeName()
  {
    return 'Setswana';
  }

  public function getCode()
  {
    return 'tn';
  }

  public function getDirection()
  {
    return LanguageInterface::DIRECTION_LTR;
  }
}
