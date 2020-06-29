<?php
namespace Packaged\Rwd\Language;

abstract class AbstractLanguage implements LanguageInterface
{
  public function __toString()
  {
    return $this->getCode();
  }
}
