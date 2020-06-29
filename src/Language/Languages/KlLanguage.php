<?php
namespace Packaged\Rwd\Language\Languages;

use Packaged\Rwd\Language\AbstractLanguage;
use Packaged\Rwd\Language\LanguageInterface;

class KlLanguage extends AbstractLanguage
{
  public function getEnglishName()
  {
    return 'Greenlandic';
  }

  public function getNativeName()
  {
    return 'Kalaallisut';
  }

  public function getCode()
  {
    return 'kl';
  }

  public function getDirection()
  {
    return LanguageInterface::DIRECTION_LTR;
  }
}
