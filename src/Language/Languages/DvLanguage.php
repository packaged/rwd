<?php
namespace Packaged\Rwd\Language\Languages;

use Packaged\Rwd\Language\AbstractLanguage;
use Packaged\Rwd\Language\LanguageInterface;

class DvLanguage extends AbstractLanguage
{
  public function getEnglishName()
  {
    return 'Divehi';
  }

  public function getNativeName()
  {
    return '<span dir=\"rtl\">ދިވެހިބަސް</span>';
  }

  public function getCode()
  {
    return 'dv';
  }

  public function getDirection()
  {
    return LanguageInterface::DIRECTION_RTL;
  }
}
