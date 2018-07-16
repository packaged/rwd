<?php
namespace Packaged\Rwd\Language\Languages;

use Packaged\Rwd\Language\LanguageInterface;

class BeLanguage implements LanguageInterface
{
  public function getEnglishName()
  {
    return 'Belarusian';
  }

  public function getNativeName()
  {
    return 'Беларуская';
  }

  public function getCode()
  {
    return 'be';
  }

  public function getDirection()
  {
    return LanguageInterface::DIRECTION_LTR;
  }
}
