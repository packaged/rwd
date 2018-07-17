<?php
namespace Packaged\Rwd\Language\Languages;

use Packaged\Rwd\Language\LanguageInterface;

class ChyLanguage implements LanguageInterface
{
  public function getEnglishName()
  {
    return 'Cheyenne';
  }

  public function getNativeName()
  {
    return 'Tsetsêhestâhese';
  }

  public function getCode()
  {
    return 'chy';
  }

  public function getDirection()
  {
    return LanguageInterface::DIRECTION_LTR;
  }
}
