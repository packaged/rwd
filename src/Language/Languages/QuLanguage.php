<?php
namespace Packaged\Rwd\Language\Languages;

use Packaged\Rwd\Language\LanguageInterface;

class QuLanguage implements LanguageInterface
{
  public function getEnglishName()
  {
    return 'Quechua';
  }

  public function getNativeName()
  {
    return 'Runa Simi';
  }

  public function getCode()
  {
    return 'qu';
  }

  public function getDirection()
  {
    return LanguageInterface::DIRECTION_LTR;
  }
}
