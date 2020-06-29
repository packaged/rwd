<?php
namespace Packaged\Rwd\Language;

abstract class AbstractRegionalLanguage extends AbstractLanguage implements RegionalLanguageInterface
{
  /**
   * @return string
   */
  public function getFullCode()
  {
    return $this->getCode() . '-' . $this->getRegionCode();
  }

  public function __toString()
  {
    return $this->getFullCode();
  }
}
