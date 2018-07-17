<?php
namespace Packaged\Rwd\Language\Languages;

use Packaged\Rwd\Language\LanguageInterface;

class TkLanguage implements LanguageInterface
{
  public function getEnglishName()
  {
    return 'Turkmen';
  }

  public function getNativeName()
  {
    return '<span dir=\"ltr\">Туркмен</span>&nbsp;/ <span dir=\"rtl\">تركمن</span>';
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
