<?php
namespace Packaged\Rwd\Language\Languages;

use Packaged\Rwd\Language\AbstractLanguage;
use Packaged\Rwd\Language\LanguageInterface;

class CoLanguage extends AbstractLanguage
{
  public function getEnglishName()
  {
    return 'Corsican';
  }

  public function getNativeName()
  {
    return 'Corsu';
  }

  public function getCode()
  {
    return 'co';
  }

  public function getDirection()
  {
    return LanguageInterface::DIRECTION_LTR;
  }
}
