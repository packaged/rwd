<?php
namespace Packaged\Rwd\Language\Languages;

use Packaged\Rwd\Language\LanguageInterface;

class CyLanguage implements LanguageInterface
{
  public function getEnglishName()
  {
    return 'Welsh';
  }

  public function getNativeName()
  {
    return 'Cymraeg';
  }

  public function getCode()
  {
    return 'cy';
  }

  public function getDirection()
  {
    return LanguageInterface::DIRECTION_LTR;
  }
}
