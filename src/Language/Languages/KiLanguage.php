<?php
namespace Packaged\Rwd\Language\Languages;

use Packaged\Rwd\Language\LanguageInterface;

class KiLanguage implements LanguageInterface
{
  public function getEnglishName()
  {
    return 'Kikuyu';
  }

  public function getNativeName()
  {
    return 'Gĩkũyũ';
  }

  public function getCode()
  {
    return 'ki';
  }

  public function getDirection()
  {
    return LanguageInterface::DIRECTION_LTR;
  }
}
