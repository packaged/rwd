<?php
namespace Packaged\Rwd\Language\Languages;

use Packaged\Rwd\Language\LanguageInterface;

class GbmLanguage implements LanguageInterface
{
  public function getEnglishName()
  {
    return 'Garhwali';
  }

  public function getNativeName()
  {
    return 'गढ़वळी';
  }

  public function getCode()
  {
    return 'gbm';
  }

  public function getDirection()
  {
    return LanguageInterface::DIRECTION_LTR;
  }
}
