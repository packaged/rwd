<?php
namespace Packaged\Rwd\Language\Languages;

use Packaged\Rwd\Language\LanguageInterface;

class ArcLanguage implements LanguageInterface
{
  public function getEnglishName()
  {
    return 'Aramaic';
  }

  public function getNativeName()
  {
    return '<span dir=\"rtl\">ܣܘܪܬ</span>';
  }

  public function getCode()
  {
    return 'arc';
  }

  public function getDirection()
  {
    return LanguageInterface::DIRECTION_RTL;
  }
}
