<?php
namespace Packaged\Rwd\Language\Languages;

use Packaged\Rwd\Language\AbstractLanguage;
use Packaged\Rwd\Language\LanguageInterface;

class EsLanguage extends AbstractLanguage
{
  public function getEnglishName()
  {
    return 'Spanish';
  }

  public function getNativeName()
  {
    return 'Español';
  }

  public function getCode()
  {
    return 'es';
  }

  public function getDirection()
  {
    return LanguageInterface::DIRECTION_LTR;
  }
}
