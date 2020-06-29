<?php
namespace Packaged\Rwd\Language\Languages;

use Packaged\Rwd\Language\AbstractLanguage;
use Packaged\Rwd\Language\LanguageInterface;

class CuLanguage extends AbstractLanguage
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
