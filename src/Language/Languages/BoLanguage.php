<?php
namespace Packaged\Rwd\Language\Languages;

use Packaged\Rwd\Language\AbstractLanguage;
use Packaged\Rwd\Language\LanguageInterface;

class BoLanguage extends AbstractLanguage
{
  public function getEnglishName()
  {
    return 'Tibetan';
  }

  public function getNativeName()
  {
    return 'བོད་ཡིག / Bod skad';
  }

  public function getCode()
  {
    return 'bo';
  }

  public function getDirection()
  {
    return LanguageInterface::DIRECTION_LTR;
  }
}
