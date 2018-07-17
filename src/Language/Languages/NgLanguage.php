<?php
namespace Packaged\Rwd\Language\Languages;

use Packaged\Rwd\Language\LanguageInterface;

class NgLanguage implements LanguageInterface
{
  public function getEnglishName()
  {
    return 'Ndonga';
  }

  public function getNativeName()
  {
    return 'Oshiwambo';
  }

  public function getCode()
  {
    return 'ng';
  }

  public function getDirection()
  {
    return LanguageInterface::DIRECTION_LTR;
  }
}
