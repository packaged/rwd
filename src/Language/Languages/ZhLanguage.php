<?php
namespace Packaged\Rwd\Language\Languages;

use Packaged\Rwd\Language\LanguageInterface;

class ZhLanguage implements LanguageInterface
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
