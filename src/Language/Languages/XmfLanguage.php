<?php
namespace Packaged\Rwd\Language\Languages;

use Packaged\Rwd\Language\LanguageInterface;

class XmfLanguage implements LanguageInterface
{
  public function getEnglishName()
  {
    return 'Megrelian';
  }

  public function getNativeName()
  {
    return 'მარგალური';
  }

  public function getCode()
  {
    return 'xmf';
  }

  public function getDirection()
  {
    return LanguageInterface::DIRECTION_LTR;
  }
}
