<?php
namespace Packaged\Rwd\Language\Languages;

use Packaged\Rwd\Language\AbstractLanguage;
use Packaged\Rwd\Language\LanguageInterface;

class EoLanguage extends AbstractLanguage
{
  public function getEnglishName()
  {
    return 'Esperanto';
  }

  public function getNativeName()
  {
    return 'Esperanto';
  }

  public function getCode()
  {
    return 'eo';
  }

  public function getDirection()
  {
    return LanguageInterface::DIRECTION_LTR;
  }
}
