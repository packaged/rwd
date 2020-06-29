<?php
namespace Packaged\Rwd\Language\Languages;

use Packaged\Rwd\Language\AbstractLanguage;
use Packaged\Rwd\Language\LanguageInterface;

class TyLanguage extends AbstractLanguage
{
  public function getEnglishName()
  {
    return 'Tahitian';
  }

  public function getNativeName()
  {
    return 'Reo Mā`ohi';
  }

  public function getCode()
  {
    return 'ty';
  }

  public function getDirection()
  {
    return LanguageInterface::DIRECTION_LTR;
  }
}
