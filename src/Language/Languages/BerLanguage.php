<?php
namespace Packaged\Rwd\Language\Languages;

use Packaged\Rwd\Language\AbstractLanguage;
use Packaged\Rwd\Language\LanguageInterface;

class BerLanguage extends AbstractLanguage
{
  public function getEnglishName()
  {
    return 'Berber / Tamazight';
  }

  public function getNativeName()
  {
    return 'ⵜⴰⵎⴰⵣⵉⵖⵜ / Tamaziɣt';
  }

  public function getCode()
  {
    return 'ber';
  }

  public function getDirection()
  {
    return LanguageInterface::DIRECTION_LTR;
  }
}
