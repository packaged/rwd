<?php
namespace Packaged\Rwd\Language\Languages;

use Packaged\Rwd\Language\AbstractLanguage;
use Packaged\Rwd\Language\LanguageInterface;

class KmLanguage extends AbstractLanguage
{
  public function getEnglishName()
  {
    return 'Cambodian';
  }

  public function getNativeName()
  {
    return 'ភាសាខ្មែរ';
  }

  public function getCode()
  {
    return 'km';
  }

  public function getDirection()
  {
    return LanguageInterface::DIRECTION_LTR;
  }
}
