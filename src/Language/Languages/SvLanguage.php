<?php
namespace Packaged\Rwd\Language\Languages;

use Packaged\Rwd\Language\LanguageInterface;

class SvLanguage implements LanguageInterface
{
  public function getEnglishName()
  {
    return 'Swedish';
  }

  public function getNativeName()
  {
    return 'Svenska';
  }

  public function getCode()
  {
    return 'sv';
  }

  public function getDirection()
  {
    return LanguageInterface::DIRECTION_LTR;
  }
}
