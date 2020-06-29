<?php
namespace Packaged\Rwd\Language\Languages;

use Packaged\Rwd\Language\AbstractLanguage;
use Packaged\Rwd\Language\LanguageInterface;

class KuLanguage extends AbstractLanguage
{
  public function getEnglishName()
  {
    return 'Kurdish';
  }

  public function getNativeName()
  {
    return '<span dir=\"ltr\">Kurdî</span> / <span dir=\"rtl\">كوردی</span>';
  }

  public function getCode()
  {
    return 'ku';
  }

  public function getDirection()
  {
    return LanguageInterface::DIRECTION_RTL;
  }
}
