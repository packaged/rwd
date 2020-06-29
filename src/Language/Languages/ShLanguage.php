<?php
namespace Packaged\Rwd\Language\Languages;

use Packaged\Rwd\Language\AbstractLanguage;
use Packaged\Rwd\Language\LanguageInterface;

class ShLanguage extends AbstractLanguage
{
  public function getEnglishName()
  {
    return 'Serbo-Croatian';
  }

  public function getNativeName()
  {
    return 'Srpskohrvatski / Српскохрватски';
  }

  public function getCode()
  {
    return 'sh';
  }

  public function getDirection()
  {
    return LanguageInterface::DIRECTION_LTR;
  }
}
