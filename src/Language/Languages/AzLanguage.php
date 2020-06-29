<?php
namespace Packaged\Rwd\Language\Languages;

use Packaged\Rwd\Language\AbstractLanguage;
use Packaged\Rwd\Language\LanguageInterface;

class AzLanguage extends AbstractLanguage
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
