<?php
namespace Packaged\Rwd\Language\Languages;

use Packaged\Rwd\Language\LanguageInterface;

class PihLanguage implements LanguageInterface
{
  public function getEnglishName()
  {
    return 'Norfolk';
  }

  public function getNativeName()
  {
    return 'Norfuk';
  }

  public function getCode()
  {
    return 'pih';
  }

  public function getDirection()
  {
    return LanguageInterface::DIRECTION_LTR;
  }
}
