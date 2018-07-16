<?php
namespace Packaged\Rwd\Language\Languages;

use Packaged\Rwd\Language\LanguageInterface;

class NvLanguage implements LanguageInterface
{
  public function getEnglishName()
  {
    return 'Navajo';
  }

  public function getNativeName()
  {
    return 'Diné bizaad';
  }

  public function getCode()
  {
    return 'nv';
  }

  public function getDirection()
  {
    return LanguageInterface::DIRECTION_LTR;
  }
}
