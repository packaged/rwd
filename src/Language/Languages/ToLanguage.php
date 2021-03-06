<?php
namespace Packaged\Rwd\Language\Languages;

use Packaged\Rwd\Language\AbstractLanguage;
use Packaged\Rwd\Language\LanguageInterface;

class ToLanguage extends AbstractLanguage
{
  public function getEnglishName()
  {
    return 'Tonga';
  }

  public function getNativeName()
  {
    return 'Lea Faka-Tonga';
  }

  public function getCode()
  {
    return 'to';
  }

  public function getDirection()
  {
    return LanguageInterface::DIRECTION_LTR;
  }
}
