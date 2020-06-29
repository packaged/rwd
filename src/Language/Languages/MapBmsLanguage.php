<?php
namespace Packaged\Rwd\Language\Languages;

use Packaged\Rwd\Language\AbstractLanguage;
use Packaged\Rwd\Language\LanguageInterface;

class MapBmsLanguage extends AbstractLanguage
{
  public function getEnglishName()
  {
    return 'Banyumasan';
  }

  public function getNativeName()
  {
    return 'Basa Banyumasan';
  }

  public function getCode()
  {
    return 'map-bms';
  }

  public function getDirection()
  {
    return LanguageInterface::DIRECTION_LTR;
  }
}
