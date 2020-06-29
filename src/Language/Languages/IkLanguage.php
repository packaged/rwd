<?php
namespace Packaged\Rwd\Language\Languages;

use Packaged\Rwd\Language\AbstractLanguage;
use Packaged\Rwd\Language\LanguageInterface;

class IkLanguage extends AbstractLanguage
{
  public function getEnglishName()
  {
    return 'Inupiak';
  }

  public function getNativeName()
  {
    return 'Iñupiak';
  }

  public function getCode()
  {
    return 'ik';
  }

  public function getDirection()
  {
    return LanguageInterface::DIRECTION_LTR;
  }
}
