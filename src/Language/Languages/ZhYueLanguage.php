<?php
namespace Packaged\Rwd\Language\Languages;

use Packaged\Rwd\Language\AbstractLanguage;
use Packaged\Rwd\Language\LanguageInterface;

class ZhYueLanguage extends AbstractLanguage
{
  public function getEnglishName()
  {
    return 'Cantonese';
  }

  public function getNativeName()
  {
    return '粵語 / 粤语';
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
