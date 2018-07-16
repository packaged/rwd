<?php
namespace Packaged\Rwd\Language\Languages;

use Packaged\Rwd\Language\LanguageInterface;

class VecLanguage implements LanguageInterface
{
  public function getEnglishName()
  {
    return 'Venetian';
  }

  public function getNativeName()
  {
    return 'Vèneto';
  }

  public function getCode()
  {
    return 'vec';
  }

  public function getDirection()
  {
    return LanguageInterface::DIRECTION_LTR;
  }
}
