<?php
namespace Packaged\Rwd\Language\Languages;

use Packaged\Rwd\Language\AbstractLanguage;
use Packaged\Rwd\Language\LanguageInterface;

class MyLanguage extends AbstractLanguage
{
  public function getEnglishName()
  {
    return 'Burmese';
  }

  public function getNativeName()
  {
    return 'Myanmasa';
  }

  public function getCode()
  {
    return 'my';
  }

  public function getDirection()
  {
    return LanguageInterface::DIRECTION_LTR;
  }
}
