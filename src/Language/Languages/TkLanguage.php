<?php
namespace Packaged\Rwd\Language\Languages;

use Packaged\Rwd\Language\AbstractLanguage;
use Packaged\Rwd\Language\LanguageInterface;

class TkLanguage extends AbstractLanguage
{
  public function getEnglishName()
  {
    return 'Turkmen';
  }

  public function getNativeName()
  {
    return '<span dir=\"ltr\">Туркмен</span> / <span dir=\"rtl\">تركمن</span>';
  }

  public function getCode()
  {
    return 'tk';
  }

  public function getDirection()
  {
    return LanguageInterface::DIRECTION_LTR;
  }
}
