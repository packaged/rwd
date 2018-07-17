<?php
namespace Packaged\Rwd\Language\Languages;

use Packaged\Rwd\Language\LanguageInterface;

class CdoLanguage implements LanguageInterface
{
  public function getEnglishName()
  {
    return 'Min Dong Chinese';
  }

  public function getNativeName()
  {
    return 'Mìng-dĕ̤ng-ngṳ̄ / 閩東語';
  }

  public function getCode()
  {
    return 'cdo';
  }

  public function getDirection()
  {
    return LanguageInterface::DIRECTION_LTR;
  }
}
