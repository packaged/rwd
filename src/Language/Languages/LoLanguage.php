<?php
namespace Packaged\Rwd\Language\Languages;

use Packaged\Rwd\Language\LanguageInterface;

class LoLanguage implements LanguageInterface
{
  public function getEnglishName()
  {
    return 'Laotian';
  }

  public function getNativeName()
  {
    return 'ລາວ / Pha xa lao';
  }

  public function getCode()
  {
    return 'lo';
  }

  public function getDirection()
  {
    return LanguageInterface::DIRECTION_LTR;
  }
}
