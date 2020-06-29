<?php
namespace Packaged\Rwd\Language\Languages;

use Packaged\Rwd\Language\AbstractLanguage;
use Packaged\Rwd\Language\LanguageInterface;

class NrmLanguage extends AbstractLanguage
{
  public function getEnglishName()
  {
    return 'Norman';
  }

  public function getNativeName()
  {
    return 'Nouormand / Normaund';
  }

  public function getCode()
  {
    return 'nrm';
  }

  public function getDirection()
  {
    return LanguageInterface::DIRECTION_LTR;
  }
}
