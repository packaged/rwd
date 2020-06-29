<?php
namespace Packaged\Rwd\Language\Languages;

use Packaged\Rwd\Language\AbstractLanguage;
use Packaged\Rwd\Language\LanguageInterface;

class ZhLanguage extends AbstractLanguage
{
  public function getEnglishName()
  {
    return 'Chinese';
  }

  public function getNativeName()
  {
    return '中文';
  }

  public function getCode()
  {
    return 'zh';
  }

  public function getDirection()
  {
    return LanguageInterface::DIRECTION_LTR;
  }
}
