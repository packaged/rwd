<?php
namespace Packaged\Rwd\Language\Languages;

use Packaged\Rwd\Language\LanguageInterface;

class MlLanguage implements LanguageInterface
{
  public function getEnglishName()
  {
    return 'Malayalam';
  }

  public function getNativeName()
  {
    return 'മലയാളം';
  }

  public function getCode()
  {
    return 'ml';
  }

  public function getDirection()
  {
    return LanguageInterface::DIRECTION_LTR;
  }
}
