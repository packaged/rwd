<?php
namespace Packaged\Rwd\Language\Languages;

use Packaged\Rwd\Language\LanguageInterface;

class ChrLanguage implements LanguageInterface
{
  public function getEnglishName()
  {
    return 'Cherokee';
  }

  public function getNativeName()
  {
    return 'ᏣᎳᎩ';
  }

  public function getCode()
  {
    return 'chr';
  }

  public function getDirection()
  {
    return LanguageInterface::DIRECTION_LTR;
  }
}
