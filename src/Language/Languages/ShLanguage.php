<?php
namespace Packaged\Rwd\Language\Languages;

use Packaged\Rwd\Language\LanguageInterface;

class ShLanguage implements LanguageInterface
{
  public function getEnglishName()
  {
    return 'Serbo-Croatian';
  }

  public function getNativeName()
  {
    return 'Srpskohrvatski&nbsp;/ Српскохрватски';
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
