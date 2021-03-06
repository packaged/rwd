<?php
namespace Packaged\Rwd\Language\Languages;

use Packaged\Rwd\Language\AbstractLanguage;
use Packaged\Rwd\Language\LanguageInterface;

class NewLanguage extends AbstractLanguage
{
  public function getEnglishName()
  {
    return 'Newar';
  }

  public function getNativeName()
  {
    return 'नेपालभाषा / Newah Bhaye';
  }

  public function getCode()
  {
    return 'new';
  }

  public function getDirection()
  {
    return LanguageInterface::DIRECTION_LTR;
  }
}
