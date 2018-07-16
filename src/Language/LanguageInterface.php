<?php
namespace Packaged\Rwd\Language;

interface LanguageInterface
{
  const DIRECTION_LTR = 'ltr';
  const DIRECTION_RTL = 'rtl';

  /**
   * @return string
   */
  public function getEnglishName();

  /**
   * @return string
   */
  public function getNativeName();

  /**
   * @return string
   */
  public function getCode();

  /**
   * ltr rtl
   *
   * @return string
   */
  public function getDirection();
}
