<?php
namespace Packaged\Rwd\Language\Languages;

use Packaged\Rwd\Language\AbstractLanguage;
use Packaged\Rwd\Language\LanguageInterface;

class TumLanguage extends AbstractLanguage
{
  public function getEnglishName()
  {
    return 'Tumbuka';
  }

  public function getNativeName()
  {
    return 'chiTumbuka';
  }

  public function getCode()
  {
    return 'tum';
  }

  public function getDirection()
  {
    return LanguageInterface::DIRECTION_LTR;
  }
}
