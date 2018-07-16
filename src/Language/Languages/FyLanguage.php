<?php
namespace Packaged\Rwd\Language\Languages;

use Packaged\Rwd\Language\LanguageInterface;

class FyLanguage implements LanguageInterface
{
  public function getEnglishName()
  {
    return 'West Frisian';
  }

  public function getNativeName()
  {
    return 'Frysk';
  }

  public function getCode()
  {
    return 'fy';
  }

  public function getDirection()
  {
    return LanguageInterface::DIRECTION_LTR;
  }
}
