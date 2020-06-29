<?php
namespace Packaged\Rwd\Language\Languages;

use Packaged\Rwd\Language\AbstractLanguage;
use Packaged\Rwd\Language\LanguageInterface;

class RoaRupLanguage extends AbstractLanguage
{
  public function getEnglishName()
  {
    return 'Aromanian';
  }

  public function getNativeName()
  {
    return 'Armâneashti';
  }

  public function getCode()
  {
    return 'roa-rup';
  }

  public function getDirection()
  {
    return LanguageInterface::DIRECTION_LTR;
  }
}
