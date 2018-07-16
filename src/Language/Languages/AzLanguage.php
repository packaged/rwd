<?php
namespace Packaged\Rwd\Language\Languages;

use Packaged\Rwd\Language\LanguageInterface;

class AzLanguage implements LanguageInterface
{
  public function getEnglishName()
  {
    return 'Azerbaijani';
  }

  public function getNativeName()
  {
    return 'Azərbaycanca / آذربايجان';
  }

  public function getCode()
  {
    return 'az';
  }

  public function getDirection()
  {
    return LanguageInterface::DIRECTION_LTR;
  }
}
