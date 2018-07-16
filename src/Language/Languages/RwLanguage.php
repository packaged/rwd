<?php
namespace Packaged\Rwd\Language\Languages;

use Packaged\Rwd\Language\LanguageInterface;

class RwLanguage implements LanguageInterface
{
  public function getEnglishName()
  {
    return 'Rwandi';
  }

  public function getNativeName()
  {
    return 'Kinyarwandi';
  }

  public function getCode()
  {
    return 'rw';
  }

  public function getDirection()
  {
    return LanguageInterface::DIRECTION_LTR;
  }
}
