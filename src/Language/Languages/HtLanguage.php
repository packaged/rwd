<?php
namespace Packaged\Rwd\Language\Languages;

use Packaged\Rwd\Language\LanguageInterface;

class HtLanguage implements LanguageInterface
{
  public function getEnglishName()
  {
    return 'Haitian';
  }

  public function getNativeName()
  {
    return 'Krèyol ayisyen';
  }

  public function getCode()
  {
    return 'ht';
  }

  public function getDirection()
  {
    return LanguageInterface::DIRECTION_LTR;
  }
}
