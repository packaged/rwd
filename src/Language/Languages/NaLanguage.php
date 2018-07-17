<?php
namespace Packaged\Rwd\Language\Languages;

use Packaged\Rwd\Language\LanguageInterface;

class NaLanguage implements LanguageInterface
{
  public function getEnglishName()
  {
    return 'Nauruan';
  }

  public function getNativeName()
  {
    return 'Dorerin Naoero';
  }

  public function getCode()
  {
    return 'na';
  }

  public function getDirection()
  {
    return LanguageInterface::DIRECTION_LTR;
  }
}
