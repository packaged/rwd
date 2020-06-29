<?php
namespace Packaged\Rwd\Language\Languages;

use Packaged\Rwd\Language\AbstractLanguage;
use Packaged\Rwd\Language\LanguageInterface;

class FoLanguage extends AbstractLanguage
{
  public function getEnglishName()
  {
    return 'Faroese';
  }

  public function getNativeName()
  {
    return 'Føroyskt';
  }

  public function getCode()
  {
    return 'fo';
  }

  public function getDirection()
  {
    return LanguageInterface::DIRECTION_LTR;
  }
}
