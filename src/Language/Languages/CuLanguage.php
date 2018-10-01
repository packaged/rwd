<?php
namespace Packaged\Rwd\Language\Languages;

use Packaged\Rwd\Language\LanguageInterface;

class CuLanguage implements LanguageInterface
{
  public function getEnglishName()
  {
    return 'Old Church Slavonic / Old Bulgarian';
  }

  public function getNativeName()
  {
    return 'словѣньскъ / slověnĭskŭ';
  }

  public function getCode()
  {
    return 'cu';
  }

  public function getDirection()
  {
    return LanguageInterface::DIRECTION_LTR;
  }
}
