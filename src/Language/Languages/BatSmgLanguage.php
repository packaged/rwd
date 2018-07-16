<?php
namespace Packaged\Rwd\Language\Languages;

use Packaged\Rwd\Language\LanguageInterface;

class BatSmgLanguage implements LanguageInterface
{
  public function getEnglishName()
  {
    return 'Samogitian';
  }

  public function getNativeName()
  {
    return 'Žemaitėška';
  }

  public function getCode()
  {
    return 'bat-smg';
  }

  public function getDirection()
  {
    return LanguageInterface::DIRECTION_LTR;
  }
}
