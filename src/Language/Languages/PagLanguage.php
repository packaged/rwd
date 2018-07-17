<?php
namespace Packaged\Rwd\Language\Languages;

use Packaged\Rwd\Language\LanguageInterface;

class PagLanguage implements LanguageInterface
{
  public function getEnglishName()
  {
    return 'Pangasinan';
  }

  public function getNativeName()
  {
    return 'Pangasinan';
  }

  public function getCode()
  {
    return 'pag';
  }

  public function getDirection()
  {
    return LanguageInterface::DIRECTION_LTR;
  }
}
