<?php
namespace Packaged\Rwd\Language\Languages;

use Packaged\Rwd\Language\AbstractLanguage;
use Packaged\Rwd\Language\LanguageInterface;

class YoLanguage extends AbstractLanguage
{
  public function getEnglishName()
  {
    return 'Yoruba';
  }

  public function getNativeName()
  {
    return 'Yorùbá';
  }

  public function getCode()
  {
    return 'yo';
  }

  public function getDirection()
  {
    return LanguageInterface::DIRECTION_LTR;
  }
}
