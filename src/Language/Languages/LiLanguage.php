<?php
namespace Packaged\Rwd\Language\Languages;

use Packaged\Rwd\Language\AbstractLanguage;
use Packaged\Rwd\Language\LanguageInterface;

class LiLanguage extends AbstractLanguage
{
  public function getEnglishName()
  {
    return 'Limburgian';
  }

  public function getNativeName()
  {
    return 'Limburgs';
  }

  public function getCode()
  {
    return 'li';
  }

  public function getDirection()
  {
    return LanguageInterface::DIRECTION_LTR;
  }
}
