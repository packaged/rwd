<?php
namespace Packaged\Rwd\Language\Languages;

use Packaged\Rwd\Language\AbstractLanguage;
use Packaged\Rwd\Language\LanguageInterface;

class FjLanguage extends AbstractLanguage
{
  public function getEnglishName()
  {
    return 'Fijian';
  }

  public function getNativeName()
  {
    return 'Na Vosa Vakaviti';
  }

  public function getCode()
  {
    return 'fj';
  }

  public function getDirection()
  {
    return LanguageInterface::DIRECTION_LTR;
  }
}
