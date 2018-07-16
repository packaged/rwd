<?php
namespace Packaged\Rwd\Language\Languages;

use Packaged\Rwd\Language\LanguageInterface;

class BerLanguage implements LanguageInterface
{
  public function getEnglishName()
  {
    return 'Berber&nbsp;/ Tamazight';
  }

  public function getNativeName()
  {
    return 'ⵜⴰⵎⴰⵣⵉⵖⵜ&nbsp;/ Tamaziɣt';
  }

  public function getCode()
  {
    return 'ber';
  }

  public function getDirection()
  {
    return LanguageInterface::DIRECTION_LTR;
  }
}
