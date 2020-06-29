<?php
namespace Packaged\Rwd\Language\Languages;

use Packaged\Rwd\Language\AbstractLanguage;
use Packaged\Rwd\Language\LanguageInterface;

class TetLanguage extends AbstractLanguage
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
