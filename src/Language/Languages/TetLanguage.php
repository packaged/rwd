<?php
namespace Packaged\Rwd\Language\Languages;

use Packaged\Rwd\Language\LanguageInterface;

class TetLanguage implements LanguageInterface
{
  public function getEnglishName()
  {
    return 'Tetum';
  }

  public function getNativeName()
  {
    return 'Tetun';
  }

  public function getCode()
  {
    return 'tet';
  }

  public function getDirection()
  {
    return LanguageInterface::DIRECTION_LTR;
  }
}
