<?php
namespace Packaged\Rwd\Language\Languages;

use Packaged\Rwd\Language\LanguageInterface;

class ItLanguage implements LanguageInterface
{
  public function getEnglishName()
  {
    return 'Italian';
  }

  public function getNativeName()
  {
    return 'Italiano';
  }

  public function getCode()
  {
    return 'it';
  }

  public function getDirection()
  {
    return LanguageInterface::DIRECTION_LTR;
  }
}
