<?php
namespace Packaged\Rwd\Language\Languages;

use Packaged\Rwd\Language\LanguageInterface;

class LijLanguage implements LanguageInterface
{
  public function getEnglishName()
  {
    return 'Ligurian';
  }

  public function getNativeName()
  {
    return 'Líguru';
  }

  public function getCode()
  {
    return 'lij';
  }

  public function getDirection()
  {
    return LanguageInterface::DIRECTION_LTR;
  }
}
