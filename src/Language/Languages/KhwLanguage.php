<?php
namespace Packaged\Rwd\Language\Languages;

use Packaged\Rwd\Language\AbstractLanguage;
use Packaged\Rwd\Language\LanguageInterface;

class KhwLanguage extends AbstractLanguage
{
  public function getEnglishName()
  {
    return 'Khowar';
  }

  public function getNativeName()
  {
    return '<span dir=\"rtl\">کھوار</span>';
  }

  public function getCode()
  {
    return 'khw';
  }

  public function getDirection()
  {
    return LanguageInterface::DIRECTION_RTL;
  }
}
