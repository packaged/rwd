<?php
namespace Packaged\Rwd\Language\Languages;

use Packaged\Rwd\Language\LanguageInterface;

class MgLanguage implements LanguageInterface
{
  public function getEnglishName()
  {
    return 'Malagasy';
  }

  public function getNativeName()
  {
    return 'Malagasy';
  }

  public function getCode()
  {
    return 'mg';
  }

  public function getDirection()
  {
    return LanguageInterface::DIRECTION_LTR;
  }
}
