<?php
namespace Packaged\Rwd\Language\Languages;

use Packaged\Rwd\Language\LanguageInterface;

class NyLanguage implements LanguageInterface
{
  public function getEnglishName()
  {
    return 'Chichewa';
  }

  public function getNativeName()
  {
    return 'Chi-Chewa';
  }

  public function getCode()
  {
    return 'ny';
  }

  public function getDirection()
  {
    return LanguageInterface::DIRECTION_LTR;
  }
}
