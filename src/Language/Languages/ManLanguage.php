<?php
namespace Packaged\Rwd\Language\Languages;

use Packaged\Rwd\Language\AbstractLanguage;
use Packaged\Rwd\Language\LanguageInterface;

class ManLanguage extends AbstractLanguage
{
  public function getEnglishName()
  {
    return 'Mandarin';
  }

  public function getNativeName()
  {
    return '官話/官话';
  }

  public function getCode()
  {
    return 'man';
  }

  public function getDirection()
  {
    return LanguageInterface::DIRECTION_LTR;
  }
}
