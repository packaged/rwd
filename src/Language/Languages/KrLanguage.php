<?php
namespace Packaged\Rwd\Language\Languages;

use Packaged\Rwd\Language\LanguageInterface;

class KrLanguage implements LanguageInterface
{
  public function getEnglishName()
  {
    return 'Kanuri';
  }

  public function getNativeName()
  {
    return 'Kanuri';
  }

  public function getCode()
  {
    return 'kr';
  }

  public function getDirection()
  {
    return LanguageInterface::DIRECTION_LTR;
  }
}
