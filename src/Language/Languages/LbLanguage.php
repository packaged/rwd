<?php
namespace Packaged\Rwd\Language\Languages;

use Packaged\Rwd\Language\LanguageInterface;

class LbLanguage implements LanguageInterface
{
  public function getEnglishName()
  {
    return 'Luxembourgish';
  }

  public function getNativeName()
  {
    return 'Lëtzebuergesch';
  }

  public function getCode()
  {
    return 'lb';
  }

  public function getDirection()
  {
    return LanguageInterface::DIRECTION_LTR;
  }
}
