<?php
namespace Packaged\Rwd\Language\Languages;

use Packaged\Rwd\Language\AbstractLanguage;
use Packaged\Rwd\Language\LanguageInterface;

class KjLanguage extends AbstractLanguage
{
  public function getEnglishName()
  {
    return 'Kuanyama';
  }

  public function getNativeName()
  {
    return 'Kuanyama';
  }

  public function getCode()
  {
    return 'kj';
  }

  public function getDirection()
  {
    return LanguageInterface::DIRECTION_LTR;
  }
}
