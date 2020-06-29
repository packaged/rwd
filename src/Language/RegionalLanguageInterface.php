<?php
namespace Packaged\Rwd\Language;

interface RegionalLanguageInterface extends LanguageInterface
{
  /**
   * @return string
   */
  public function getRegionCode();

  /**
   * @return string
   */
  public function getFullCode();
}
