<?php
namespace Packaged\Rwd\Language\Languages;

use Packaged\Rwd\Language\LanguageInterface;

class PmsLanguage implements LanguageInterface
{
  public function getEnglishName()
  {
    return 'Piedmontese';
  }

  public function getNativeName()
  {
    return 'Piemontèis';
  }

  public function getCode()
  {
    return 'pms';
  }

  public function getDirection()
  {
    return LanguageInterface::DIRECTION_LTR;
  }
}
