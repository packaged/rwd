<?php
namespace Packaged\Rwd\Language\Languages;

use Packaged\Rwd\Language\LanguageInterface;

class PlLanguage implements LanguageInterface
{
  public function getEnglishName()
  {
    return 'Polish';
  }

  public function getNativeName()
  {
    return 'Polski';
  }

  public function getCode()
  {
    return 'pl';
  }

  public function getDirection()
  {
    return LanguageInterface::DIRECTION_LTR;
  }
}
