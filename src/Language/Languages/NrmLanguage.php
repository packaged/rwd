<?php
namespace Packaged\Rwd\Language\Languages;

use Packaged\Rwd\Language\LanguageInterface;

class NrmLanguage implements LanguageInterface
{
  public function getEnglishName()
  {
    return 'Norman';
  }

  public function getNativeName()
  {
    return 'Nouormand&nbsp;/ Normaund';
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
