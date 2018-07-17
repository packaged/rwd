<?php
namespace Packaged\Rwd\Language\Languages;

use Packaged\Rwd\Language\LanguageInterface;

class RmyLanguage implements LanguageInterface
{
  public function getEnglishName()
  {
    return 'Romani';
  }

  public function getNativeName()
  {
    return 'Romani&nbsp;/ रोमानी';
  }

  public function getCode()
  {
    return 'rmy';
  }

  public function getDirection()
  {
    return LanguageInterface::DIRECTION_LTR;
  }
}
