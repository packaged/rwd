<?php
namespace Packaged\Rwd\Language\Languages;

use Packaged\Rwd\Language\AbstractLanguage;
use Packaged\Rwd\Language\LanguageInterface;

class XmfLanguage extends AbstractLanguage
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
