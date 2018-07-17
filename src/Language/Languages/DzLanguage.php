<?php
namespace Packaged\Rwd\Language\Languages;

use Packaged\Rwd\Language\LanguageInterface;

class DzLanguage implements LanguageInterface
{
  public function getEnglishName()
  {
    return 'Dzongkha';
  }

  public function getNativeName()
  {
    return 'ཇོང་ཁ';
  }

  public function getCode()
  {
    return 'dz';
  }

  public function getDirection()
  {
    return LanguageInterface::DIRECTION_LTR;
  }
}
