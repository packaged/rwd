<?php
namespace Packaged\Rwd\Language\Languages;

use Packaged\Rwd\Language\LanguageInterface;

class CsbLanguage implements LanguageInterface
{
  public function getEnglishName()
  {
    return 'Kashubian';
  }

  public function getNativeName()
  {
    return 'Kaszëbsczi';
  }

  public function getCode()
  {
    return 'csb';
  }

  public function getDirection()
  {
    return LanguageInterface::DIRECTION_LTR;
  }
}
