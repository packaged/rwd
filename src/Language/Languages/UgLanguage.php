<?php
namespace Packaged\Rwd\Language\Languages;

use Packaged\Rwd\Language\AbstractLanguage;
use Packaged\Rwd\Language\LanguageInterface;

class UgLanguage extends AbstractLanguage
{
  public function getEnglishName()
  {
    return 'Uyghur';
  }

  public function getNativeName()
  {
    return 'Uyƣurqə / <span dir=\"rtl\">ئۇيغۇرچە</span>';
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
