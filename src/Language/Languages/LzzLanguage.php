<?php
namespace Packaged\Rwd\Language\Languages;

use Packaged\Rwd\Language\AbstractLanguage;
use Packaged\Rwd\Language\LanguageInterface;

class LzzLanguage extends AbstractLanguage
{
  public function getEnglishName()
  {
    return 'Laz';
  }

  public function getNativeName()
  {
    return 'Lazuri / ლაზური';
  }

  public function getCode()
  {
    return 'lzz';
  }

  public function getDirection()
  {
    return LanguageInterface::DIRECTION_LTR;
  }
}
