<?php
namespace Packaged\Rwd\Language\Languages;

use Packaged\Rwd\Language\AbstractLanguage;
use Packaged\Rwd\Language\LanguageInterface;

class BmLanguage extends AbstractLanguage
{
  public function getEnglishName()
  {
    return 'Bambara';
  }

  public function getNativeName()
  {
    return 'Bamanankan';
  }

  public function getCode()
  {
    return 'bm';
  }

  public function getDirection()
  {
    return LanguageInterface::DIRECTION_LTR;
  }
}
