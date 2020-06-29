<?php
namespace Packaged\Rwd\Language\Languages;

use Packaged\Rwd\Language\AbstractLanguage;
use Packaged\Rwd\Language\LanguageInterface;

class ZhTwLanguage extends AbstractLanguage
{
  public function getEnglishName()
  {
    return 'Traditional Chinese';
  }

  public function getNativeName()
  {
    return '‪中文(台灣)‬';
  }

  public function getCode()
  {
    return 'zh-tw';
  }

  public function getDirection()
  {
    return LanguageInterface::DIRECTION_LTR;
  }
}
