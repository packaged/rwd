<?php
namespace Packaged\Rwd\Language\Languages;

use Packaged\Rwd\Language\LanguageInterface;

class BmLanguage implements LanguageInterface
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
