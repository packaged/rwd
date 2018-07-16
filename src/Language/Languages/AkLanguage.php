<?php
namespace Packaged\Rwd\Language\Languages;

use Packaged\Rwd\Language\LanguageInterface;

class AkLanguage implements LanguageInterface
{
  public function getEnglishName()
  {
    return 'Akan';
  }

  public function getNativeName()
  {
    return 'Akana';
  }

  public function getCode()
  {
    return 'ak';
  }

  public function getDirection()
  {
    return LanguageInterface::DIRECTION_LTR;
  }
}
