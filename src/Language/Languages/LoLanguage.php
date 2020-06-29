<?php
namespace Packaged\Rwd\Language\Languages;

use Packaged\Rwd\Language\AbstractLanguage;
use Packaged\Rwd\Language\LanguageInterface;

class LoLanguage extends AbstractLanguage
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
