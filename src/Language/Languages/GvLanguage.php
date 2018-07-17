<?php
namespace Packaged\Rwd\Language\Languages;

use Packaged\Rwd\Language\LanguageInterface;

class GvLanguage implements LanguageInterface
{
  public function getEnglishName()
  {
    return 'Manx';
  }

  public function getNativeName()
  {
    return 'Gaelg';
  }

  public function getCode()
  {
    return 'gv';
  }

  public function getDirection()
  {
    return LanguageInterface::DIRECTION_LTR;
  }
}
