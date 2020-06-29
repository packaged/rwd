<?php
namespace Packaged\Rwd\Language\Languages;

use Packaged\Rwd\Language\AbstractLanguage;
use Packaged\Rwd\Language\LanguageInterface;

class BugLanguage extends AbstractLanguage
{
  public function getEnglishName()
  {
    return 'Buginese';
  }

  public function getNativeName()
  {
    return 'ᨅᨔ ᨕᨘᨁᨗ / Basa Ugi';
  }

  public function getCode()
  {
    return 'bug';
  }

  public function getDirection()
  {
    return LanguageInterface::DIRECTION_LTR;
  }
}
