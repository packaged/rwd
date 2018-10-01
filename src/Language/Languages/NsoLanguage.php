<?php
namespace Packaged\Rwd\Language\Languages;

use Packaged\Rwd\Language\LanguageInterface;

class NsoLanguage implements LanguageInterface
{
  public function getEnglishName()
  {
    return 'Northern Sotho';
  }

  public function getNativeName()
  {
    return 'Sesotho sa Leboa / Sepedi';
  }

  public function getCode()
  {
    return 'nso';
  }

  public function getDirection()
  {
    return LanguageInterface::DIRECTION_LTR;
  }
}
