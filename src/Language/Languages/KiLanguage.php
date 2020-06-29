<?php
namespace Packaged\Rwd\Language\Languages;

use Packaged\Rwd\Language\AbstractLanguage;
use Packaged\Rwd\Language\LanguageInterface;

class KiLanguage extends AbstractLanguage
{
  public function getEnglishName()
  {
    return 'Kikuyu';
  }

  public function getNativeName()
  {
    return 'Gĩkũyũ';
  }

  public function getCode()
  {
    return 'ki';
  }

  public function getDirection()
  {
    return LanguageInterface::DIRECTION_LTR;
  }
}
