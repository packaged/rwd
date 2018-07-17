<?php
namespace Packaged\Rwd\Language\Languages;

use Packaged\Rwd\Language\LanguageInterface;

class EtLanguage implements LanguageInterface
{
  public function getEnglishName()
  {
    return 'Estonian';
  }

  public function getNativeName()
  {
    return 'Eesti';
  }

  public function getCode()
  {
    return 'et';
  }

  public function getDirection()
  {
    return LanguageInterface::DIRECTION_LTR;
  }
}
