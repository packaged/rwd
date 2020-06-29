<?php
namespace Packaged\Rwd\Language\Languages;

use Packaged\Rwd\Language\AbstractLanguage;
use Packaged\Rwd\Language\LanguageInterface;

class NapLanguage extends AbstractLanguage
{
  public function getEnglishName()
  {
    return 'Neapolitan';
  }

  public function getNativeName()
  {
    return 'Nnapulitano';
  }

  public function getCode()
  {
    return 'nap';
  }

  public function getDirection()
  {
    return LanguageInterface::DIRECTION_LTR;
  }
}
