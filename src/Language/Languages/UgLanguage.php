<?php
namespace Packaged\Rwd\Language\Languages;

use Packaged\Rwd\Language\LanguageInterface;

class UgLanguage implements LanguageInterface
{
  public function getEnglishName()
  {
    return 'Uyghur';
  }

  public function getNativeName()
  {
    return 'Uyƣurqə&nbsp;/ <span dir=\"rtl\">ئۇيغۇرچە</span>';
  }

  public function getCode()
  {
    return 'ug';
  }

  public function getDirection()
  {
    return LanguageInterface::DIRECTION_LTR;
  }
}
