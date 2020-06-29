<?php
namespace Packaged\Rwd\Language\Languages;

use Packaged\Rwd\Language\AbstractLanguage;
use Packaged\Rwd\Language\LanguageInterface;

class XalLanguage extends AbstractLanguage
{
  public function getEnglishName()
  {
    return 'Kalmyk';
  }

  public function getNativeName()
  {
    return 'Хальмг';
  }

  public function getCode()
  {
    return 'xal';
  }

  public function getDirection()
  {
    return LanguageInterface::DIRECTION_LTR;
  }
}
