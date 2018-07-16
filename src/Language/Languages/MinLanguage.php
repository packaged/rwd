<?php
namespace Packaged\Rwd\Language\Languages;

use Packaged\Rwd\Language\LanguageInterface;

class MinLanguage implements LanguageInterface
{
  public function getEnglishName()
  {
    return 'Minangkabau';
  }

  public function getNativeName()
  {
    return 'Minangkabau';
  }

  public function getCode()
  {
    return 'min';
  }

  public function getDirection()
  {
    return LanguageInterface::DIRECTION_LTR;
  }
}
