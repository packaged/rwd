<?php
namespace Packaged\Rwd\Language\Languages;

use Packaged\Rwd\Language\LanguageInterface;

class KuLanguage implements LanguageInterface
{
  public function getEnglishName()
  {
    return 'Kurdish';
  }

  public function getNativeName()
  {
    return '<span dir=\"ltr\">Kurdî</span>&nbsp;/ <span dir=\"rtl\">كوردی</span>';
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
