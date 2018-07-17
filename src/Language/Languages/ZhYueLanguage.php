<?php
namespace Packaged\Rwd\Language\Languages;

use Packaged\Rwd\Language\LanguageInterface;

class ZhYueLanguage implements LanguageInterface
{
  public function getEnglishName()
  {
    return 'Cantonese';
  }

  public function getNativeName()
  {
    return '粵語&nbsp;/ 粤语';
  }

  public function getCode()
  {
    return 'zh-yue';
  }

  public function getDirection()
  {
    return LanguageInterface::DIRECTION_LTR;
  }
}
