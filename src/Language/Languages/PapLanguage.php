<?php
namespace Packaged\Rwd\Language\Languages;

use Packaged\Rwd\Language\AbstractLanguage;
use Packaged\Rwd\Language\LanguageInterface;

class PapLanguage extends AbstractLanguage
{
  public function getEnglishName()
  {
    return 'Papiamentu';
  }

  public function getNativeName()
  {
    return 'Papiamentu';
  }

  public function getCode()
  {
    return 'pap';
  }

  public function getDirection()
  {
    return LanguageInterface::DIRECTION_LTR;
  }
}
