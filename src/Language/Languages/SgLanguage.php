<?php
namespace Packaged\Rwd\Language\Languages;

use Packaged\Rwd\Language\LanguageInterface;

class SgLanguage implements LanguageInterface
{
  public function getEnglishName()
  {
    return 'Sango';
  }

  public function getNativeName()
  {
    return 'Sängö';
  }

  public function getCode()
  {
    return 'sg';
  }

  public function getDirection()
  {
    return LanguageInterface::DIRECTION_LTR;
  }
}
