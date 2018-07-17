<?php
namespace Packaged\Rwd\Language\Languages;

use Packaged\Rwd\Language\LanguageInterface;

class CebLanguage implements LanguageInterface
{
  public function getEnglishName()
  {
    return 'Cebuano';
  }

  public function getNativeName()
  {
    return 'Sinugboanong Binisaya';
  }

  public function getCode()
  {
    return 'ceb';
  }

  public function getDirection()
  {
    return LanguageInterface::DIRECTION_LTR;
  }
}
