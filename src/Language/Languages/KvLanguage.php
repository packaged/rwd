<?php
namespace Packaged\Rwd\Language\Languages;

use Packaged\Rwd\Language\LanguageInterface;

class KvLanguage implements LanguageInterface
{
  public function getEnglishName()
  {
    return 'Komi';
  }

  public function getNativeName()
  {
    return 'Коми';
  }

  public function getCode()
  {
    return 'kv';
  }

  public function getDirection()
  {
    return LanguageInterface::DIRECTION_LTR;
  }
}
