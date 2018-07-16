<?php
namespace Packaged\Rwd\Language\Languages;

use Packaged\Rwd\Language\LanguageInterface;

class FfLanguage implements LanguageInterface
{
  public function getEnglishName()
  {
    return 'Peul';
  }

  public function getNativeName()
  {
    return 'Fulfulde';
  }

  public function getCode()
  {
    return 'ff';
  }

  public function getDirection()
  {
    return LanguageInterface::DIRECTION_LTR;
  }
}
