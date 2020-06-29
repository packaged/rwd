<?php
namespace Packaged\Rwd\Language\Languages;

use Packaged\Rwd\Language\AbstractLanguage;
use Packaged\Rwd\Language\LanguageInterface;

class MgLanguage extends AbstractLanguage
{
  public function getEnglishName()
  {
    return 'Malagasy';
  }

  public function getNativeName()
  {
    return 'Malagasy';
  }

  public function getCode()
  {
    return 'mg';
  }

  public function getDirection()
  {
    return LanguageInterface::DIRECTION_LTR;
  }
}
