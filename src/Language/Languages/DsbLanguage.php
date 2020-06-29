<?php
namespace Packaged\Rwd\Language\Languages;

use Packaged\Rwd\Language\AbstractLanguage;
use Packaged\Rwd\Language\LanguageInterface;

class DsbLanguage extends AbstractLanguage
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
