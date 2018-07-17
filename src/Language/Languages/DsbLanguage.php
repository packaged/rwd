<?php
namespace Packaged\Rwd\Language\Languages;

use Packaged\Rwd\Language\LanguageInterface;

class DsbLanguage implements LanguageInterface
{
  public function getEnglishName()
  {
    return 'Lower Sorbian';
  }

  public function getNativeName()
  {
    return 'Dolnoserbski';
  }

  public function getCode()
  {
    return 'dsb';
  }

  public function getDirection()
  {
    return LanguageInterface::DIRECTION_LTR;
  }
}
