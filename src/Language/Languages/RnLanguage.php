<?php
namespace Packaged\Rwd\Language\Languages;

use Packaged\Rwd\Language\AbstractLanguage;
use Packaged\Rwd\Language\LanguageInterface;

class RnLanguage extends AbstractLanguage
{
  public function getEnglishName()
  {
    return 'Kirundi';
  }

  public function getNativeName()
  {
    return 'Kirundi';
  }

  public function getCode()
  {
    return 'rn';
  }

  public function getDirection()
  {
    return LanguageInterface::DIRECTION_LTR;
  }
}
