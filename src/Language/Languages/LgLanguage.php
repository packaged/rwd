<?php
namespace Packaged\Rwd\Language\Languages;

use Packaged\Rwd\Language\AbstractLanguage;
use Packaged\Rwd\Language\LanguageInterface;

class LgLanguage extends AbstractLanguage
{
  public function getEnglishName()
  {
    return 'Ganda';
  }

  public function getNativeName()
  {
    return 'Luganda';
  }

  public function getCode()
  {
    return 'lg';
  }

  public function getDirection()
  {
    return LanguageInterface::DIRECTION_LTR;
  }
}
