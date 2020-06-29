<?php
namespace Packaged\Rwd\Language\Languages;

use Packaged\Rwd\Language\AbstractLanguage;
use Packaged\Rwd\Language\LanguageInterface;

class CebLanguage extends AbstractLanguage
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
