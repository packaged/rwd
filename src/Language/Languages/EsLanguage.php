<?php
namespace Packaged\Rwd\Language\Languages;

use Packaged\Rwd\Language\LanguageInterface;

class EsLanguage implements LanguageInterface
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
