<?php
namespace Packaged\Rwd\Language\Languages;

use Packaged\Rwd\Language\LanguageInterface;

class SnLanguage implements LanguageInterface
{
  public function getEnglishName()
  {
    return 'Shona';
  }

  public function getNativeName()
  {
    return 'chiShona';
  }

  public function getCode()
  {
    return 'sn';
  }

  public function getDirection()
  {
    return LanguageInterface::DIRECTION_LTR;
  }
}
