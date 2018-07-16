<?php
namespace Packaged\Rwd\Language\Languages;

use Packaged\Rwd\Language\LanguageInterface;

class UdmLanguage implements LanguageInterface
{
  public function getEnglishName()
  {
    return 'Udmurt';
  }

  public function getNativeName()
  {
    return 'Удмурт кыл';
  }

  public function getCode()
  {
    return 'udm';
  }

  public function getDirection()
  {
    return LanguageInterface::DIRECTION_LTR;
  }
}
