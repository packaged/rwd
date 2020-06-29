<?php
namespace Packaged\Rwd\Language\Languages;

use Packaged\Rwd\Language\AbstractLanguage;
use Packaged\Rwd\Language\LanguageInterface;

class NvLanguage extends AbstractLanguage
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
