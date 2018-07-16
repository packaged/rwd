<?php
namespace Packaged\Rwd\Language\Languages;

use Packaged\Rwd\Language\LanguageInterface;

class NlLanguage implements LanguageInterface
{
  public function getEnglishName()
  {
    return 'Dutch';
  }

  public function getNativeName()
  {
    return 'Nederlands';
  }

  public function getCode()
  {
    return 'nl';
  }

  public function getDirection()
  {
    return LanguageInterface::DIRECTION_LTR;
  }
}
