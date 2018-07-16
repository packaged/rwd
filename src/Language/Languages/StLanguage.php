<?php
namespace Packaged\Rwd\Language\Languages;

use Packaged\Rwd\Language\LanguageInterface;

class StLanguage implements LanguageInterface
{
  public function getEnglishName()
  {
    return 'Southern Sotho';
  }

  public function getNativeName()
  {
    return 'Sesotho';
  }

  public function getCode()
  {
    return 'st';
  }

  public function getDirection()
  {
    return LanguageInterface::DIRECTION_LTR;
  }
}
